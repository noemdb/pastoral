<?php

namespace App\Models\app\Pescolar;

use App\Models\app\Pescolar\Traits\Institution\LibraryRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    use LibraryRelations;

    protected $fillable = [
        'pastoral_id','pescolar_id','curriculum_id','lapse_id','level_id','section_id','code','code_sm','name','description','observations','autor','color','header','body','attachment','footer','status',
    ];

    protected $dates = ['created_at','updated_at'];

    const COLUMN_COMMENTS = [
        'pastoral_id'=>'Instirución',
        'pescolar_id'=>'Período',
        'lapse_id'=>'Programa',
        'curriculum_id' => 'Planes de formación',
        'level_id' => 'Nivel',
        'code' => 'Código',
        'code_sm' => 'Código abreviado',
        'name' => 'Nombre',
        'description' => 'Descripción',
        'observations' => 'Observaciones',
        'autor' => 'Autor',
        'color' => 'Color',
        'header' => 'Ecabezado',
        'body'=>'Cuerpo',
        'attachment'=>'Abjunto',
        'footer'=>'Pie de pag.',
        'status'=>'Estado',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->code} {$this->name} {$this->description}";
    }
}

/*

'pastoral_id','pescolar_id','curriculum_id','lapse_id','level_id','section_id','code','code_sm','name','description','observations','autor','color','header','body','attachment','footer','status',

'pastoral_id'=>'Instirución',
'pescolar_id'=>'Período',
'lapse_id'=>'Programa',
'curriculum_id'=>'',
'level_id'=>'',
'section_id'=>'',
'code'=>'',
'code_sm'=>'',
'name'=>'',
'description'=>'',
'observations'=>'',
'autor'=>'',
'color'=>'',
'header'=>'',
'body'=>'',
'attachment'=>'',
'footer'=>'',
'status'=>'',


pastoral_id
pescolar_id
curriculum_id
lapse_id
level_id
section_id
code
code_sm
name
description
observations
autor
color
header
body
attachment
footer
status

*/
