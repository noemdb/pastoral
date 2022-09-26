<?php

namespace App\Models\app\Pescolar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Pescolar\Traits\Section\SectionRelations;

class Section extends Model
{
    use HasFactory;
    use SectionRelations;

    protected $fillable = [
       'level_id','code','code_sm','name','description','observations','color','header','body','footer','status',
    ];
    
    protected $dates = ['created_at','updated_at'];

    const COLUMN_COMMENTS = [
        'level_id' => 'Nivel de Estudio',
        'code' => 'Código',
        'code_sm' => 'Código abreviado',
        'name' => 'Nombre',
        'description' => 'Descripción',
        'observations' => 'Observaciones',
        'color' => 'Color',
        'header'=>'Tìtulo',
        'body'=>'Cuerpo',
        'footer'=>'Pie de página',
        'status' => 'Estado',
    ];
    
    public function getFullNameAttribute()
    {
        return "{$this->code} {$this->name}";
    }
}

/*
'level_id','code','code_sm','name','description','observations','color','header','body','footer','status',

level_id
code
code_sm
name
description
observations
color
header
body
footer
status

level_id
code
code_sm
name
description
observations
color
header
body
footer
status

*/