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
        ///////////////////////
        'inscriptions_count' => 'Inscritos',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->code} {$this->name}";
    }

    public static function section_list_fullname($pastoral_id = null, $pescolar_id = null, $curriculum_id = null)
    {
        $sections = Section::select('sections.id')
            ->SelectRaw(' pastorals.name || " - " || pescolars.name || " - " || curricula.name || " - " || levels.name || " - " || sections.name as name ')
            ->join('levels', 'levels.id', '=', 'sections.level_id')
            ->join('lapses', 'lapses.id', '=', 'levels.lapse_id')
            ->join('curricula', 'curricula.id', '=', 'lapses.curriculum_id')
            ->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
            ->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id');

        $sections = (isset($pastoral_id)) ? $sections->where('pastorals.id',$pastoral_id) : $sections;
        $sections = (isset($pescolar_id)) ? $sections->where('pescolars.id',$pescolar_id) : $sections;
        $sections = (isset($curriculum_id)) ? $sections->where('curricula.id',$curriculum_id) : $sections;

        $sections = $sections->pluck('name','id');
        return $sections;
    }

    public function getPensumsAttribute()
    {
        $section = Section::find($this->id);
        $level = ($section) ? $section->level : null ;
        $courses = ($level) ? Course::select('courses.id')
            ->SelectRaw('courses.code || " - " || courses.name as name' )
            ->join('pensums', 'courses.id', '=', 'pensums.course_id')
            ->where('pensums.level_id',$level->id)
            ->get()
            :  collect(); //dd($courses);
        return $courses;
    }

    public function getLapsesAttribute()
    {
        $lapses = Section::select('lapses.id','lapses.name as lapseName')
        ->SelectRaw(' pastorals.name || " - " || pescolars.name || " - " || curricula.name || " - " || lapses.name as lapseFullName ')
        ->join('levels', 'levels.id', '=', 'sections.level_id')
        ->join('lapses', 'lapses.id', '=', 'levels.lapse_id')
        ->join('curricula', 'curricula.id', '=', 'lapses.curriculum_id')
        ->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
        ->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id')
        ->where('sections.id',$this->id)
        ->get(); //dd($lapses);
        return $lapses;
    }

    public function getStatusDeleteAttribute()
    {
        return $this->inscriptions->isEmpty();
    }

    public function getInscriptionsCountAttribute()
    {
        return $this->inscriptions->count();
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
