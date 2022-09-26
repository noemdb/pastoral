<?php

namespace App\Models\app\Pescolar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Pescolar\Traits\Lapse\LapseRelations;

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
        'curriculum_id' => 'Plan de Estudio',
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
    ];
    
    public function getFullNameAttribute()
    {
        return "{$this->code} {$this->name}";
    }
}


/*

'curriculum_id','code','code_sm','name','description','observations','finicial','ffinal','status','color','header','footer','body'

*/