<?php

namespace App\Models\app\Pescolar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Estudiant\Tinscription;

use App\Models\app\Pescolar\Traits\Section\SectionRelations;
use Illuminate\Support\Facades\DB;

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

    public static function section_list_fullname() 
    {
        $sections = Section::select('sections.id')
            ->SelectRaw(' pastorals.name || " - " || pescolars.name || " - " || curricula.name || " - " || levels.name || " - " || sections.name as name ')
            ->join('levels', 'levels.id', '=', 'sections.level_id')
            ->join('curricula', 'curricula.id', '=', 'levels.curriculum_id')
            ->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
            ->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id')
            ->pluck('name','id');
        return $sections;
    }
}

/*

DB::raw('pastorals.code || " - " || pescolars.code  || " - " || curricula.code as name  || " - " || levels.code as name  || " - " || sections.name as name' )

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