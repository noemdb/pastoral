<?php

namespace App\Models\app\Estudiant;

use App\Models\app\Estudiant\Traits\Competitor\InscriptionRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    use InscriptionRelations;

    protected $fillable = [
        'tinscription_id','section_id','estudiant_id','observations'
    ];
    
    protected $dates = ['created_at','updated_at'];

    const COLUMN_COMMENTS = [
        'pastoral_id' => 'Institución',
        'pescolar_id' => 'Período de Formación',
        'curriculum_id' => 'Planes de Formación',
        'level_id' => 'Niveles de Formación',
        'tinscription_id' => 'Tipo',
        'section_id' => 'Grupo',
        'estudiant_id' => 'Estudiante',
        'ci' => 'CI',
        'observations' => 'Observaciones',
    ];
    
    public function getFullNameAttribute()
    {
        return "{$this->tinscription->name} {$this->section->level->name} {$this->section->name}";
    }

    public static function courses_list() 
    {
        //return Course::pluck('name','id');
    }

    public static function coursesLevelId_list($level_id) 
    {
        // $level = Level::find($level_id);
        // $courses_list = ($level) ? Course::select('courses.id',DB::raw('courses.code || " - " || courses.name as name' ))->where('curriculum_id',$level->curriculum_id)->pluck('name','id') :  collect(); //dd($level_id,$level);
        // return $courses_list;
    }
}

/*

'tinscription_id','section_id','estudiant_id','observations'

'tinscription_id' => 'tinscription_id',
'section_id' => 'section_id',
'estudiant_id' => 'estudiant_id',
'observations' => 'observations',

tinscription_id
section_id
estudiant_id
observations

*/