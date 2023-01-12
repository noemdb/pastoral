<?php

namespace App\Models\app\Pescolar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Pescolar\Traits\Lapse\LapseRelations;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Lapse extends Model
{
    use HasFactory;

    use LapseRelations;

    protected $fillable = [
        'curriculum_id','code','code_sm','name','description','observations','finicial','ffinal','status','color','header','footer','body'
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
        'curriculum_id' => 'Plan de Formación',
        'code' => 'Código',
        'code_sm' => 'Código abreviado',
        'name' => 'Nombre',
        'description' => 'Descripción',
        'observations' => 'Observaciones',
        'finicial' => 'F.Inicial',
        'ffinal' => 'F.Final',
        'status' => 'Estado',
        'color' => 'Color',
        'header'=>'Tìtulo',
        'body'=>'Cuerpo',
        'footer'=>'Pie de página',
        ////////////////////////////
        'count_levels'=>'N.Niveles',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->code} {$this->name}";
    }

    public static function lapses_list()
    {
        $lapses = Lapse::select('lapses.*',DB::raw('pescolars.code || " - " || curricula.code || " - " || curricula.name as name' ))
            ->join('curricula', 'curricula.id', '=', 'lapses.curriculum_id')
            ->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
            ->pluck('name','id');
        return $lapses;
    }

    public function getStatusDeleteAttribute()
    {
        // return $this->levels->isEmpty();
    }

    public function getCountLevelsAttribute()
    {
        // return $this->levels->count();
    }
}


/*

'curriculum_id','code','code_sm','name','description','observations','finicial','ffinal','status','color','header','footer','body'

*/
