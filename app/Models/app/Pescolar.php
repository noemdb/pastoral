<?php

namespace App\Models\app;

use App\Models\app\Pescolar\Traits\Pescolar\PescolarRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

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
    ];

	public static function pescolars_list() 
	{
		return Pescolar::pluck('name','id');
	}

    public function getFullNameAttribute()
    {
    	$pastoral = $this->pastoral;
    	$fullname = ($pastoral) ? $pastoral->code . ' - '. $this->name : null;
        return $fullname;
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