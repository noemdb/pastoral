<?php

namespace App\Models\app;

use App\Models\app\Pescolar\Traits\Pescolar\PescolarRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Pescolar extends Model
{
	use HasFactory;
	use PescolarRelations;

	protected $fillable = [
		'pastoral_id','name','code','finicial','ffinal','description','observations','color','header','body','footer',
	];

	protected $dates = ['created_at','updated_at'];

	public function getFinicialAttribute()
    {
        return  Carbon::parse($this->attributes['finicial'])->format('Y-m-d');
	}

	public function getFfinalAttribute()
    {
        return  Carbon::parse($this->attributes['ffinal'])->format('Y-m-d');
    }

    const COLUMN_COMMENTS = [
		'pastoral_id'=>'Institución',
		'name'=>'Nombre',
		'code'=>'Código',
		'finicial'=>'F.Inicial',
		'ffinal'=>'F.Final',
		'description'=>'Descripción',
		'observations'=>'Observaciones',
		'color'=>'Color',
		'header'=>'Tìtulo',
		'body'=>'Cuerpo',
		'footer'=>'Pie de página',
        ////////////////////////////
		'count_curricula'=>'N. Planes F.',

    ];

	public static function pescolars_list()
	{
		return Pescolar::pluck('name','id');
	}

	public function curricula_full_list()
    {
        $pescolars = Pescolar::select('curricula.id')
            ->SelectRaw(' curricula.code  || " - " || curricula.name as name ')
            ->join('curricula', 'pescolars.id', '=', 'curricula.pescolar_id')
            ->where('pescolars.id',$this->id)
            ->pluck('name','id');
        return $pescolars;
    }

    public function getFullNameAttribute()
    {
		$pastoral = $this->pastoral;
		$fullname = ($pastoral) ? $pastoral->code . ' - '. $this->name : null;
		return $fullname;
	}

	public static function pescolar_list_fullname()
	{
		$pescolar_list = Pescolar::select('pescolars.id',DB::raw('pescolars.name || " | INS. " || pastorals.name as fullnamename' ))
			->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id')
			->pluck('fullnamename','id');
		return $pescolar_list;
	}

    public function getStatusDeleteAttribute()
    {
        return $this->curricula->isEmpty();
    }
}

/*

'pastoral_id','name','code','finicial','ffinal','description','observations','color','header','body','footer',

'pastoral_id'=>'',
'name'=>'',
'code'=>'',
'finicial'=>'',
'ffinal'=>'',
'description'=>'',
'observations'=>'',
'color'=>'',
'header'=>'',
'body'=>'',
'footer'=>'',

Schema::create('pescolars', function (Blueprint $table) {
$table->id();
$table->integer('pastoral_id')->unsigned();
$table->string('name');
$table->string('code')->nullable();
$table->date('finicial');
$table->date('ffinal');
$table->string('description')->nullable();
$table->string('observations')->nullable();
$table->string('color',12)->default('#e5e7eb')->nullable();
$table->text('header')->nullable();
$table->text('body')->nullable();
$table->text('footer')->nullable();
$table->timestamps();
// $table->foreign('pastoral_id')->references('id')->on('pastorals')->onDelete('cascade')->onUpdate('cascade');
});

*/
