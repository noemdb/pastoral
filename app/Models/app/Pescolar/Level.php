<?php

namespace App\Models\app\Pescolar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Pescolar\Traits\Level\LevelRelations; //app/Models/app/Pescolar/Traits/Level/LevelRelations.php
use Illuminate\Support\Facades\DB;

class Level extends Model
{
    use HasFactory;

    use LevelRelations;

    protected $fillable = [
        'curriculum_id','code','code_sm','name','description','observations','color','header','body','footer','status',
    ];

    protected $dates = ['created_at','updated_at'];

    const COLUMN_COMMENTS = [
        'curriculum_id' => 'Plan de Formación',
        'code' => 'Código',
        'code_sm' => 'Código abreviado',
        'name' => 'Nombre',
        'description' => 'Descripción',
        'observations' => 'Observaciones',
        'color' => 'Color',
        'header' => 'Header',
        'body' => 'Cuerpo',
        'footer' => 'Pie de Página',
        'status'=>'Estado',
    ];


    public function getFullNameAttribute()
    {
        return "{$this->code} {$this->name}";
    }

    public function sections_list()
    {
        $levels = Section::select('sections.id')
            ->SelectRaw(' sections.code  || " - " || sections.name as name ')
            ->join('levels', 'levels.id', '=', 'sections.level_id')
            ->where('levels.id',$this->id)
            ->pluck('name','id');
        return $levels;
    }

    public static function levels_list()
    {
        return Level::pluck('name','id');
    }

    public static function levels_list_fullname()
	{
		$curricula_list = Level::select('levels.id',DB::raw('curricula.name || " | PE. "  || pescolars.name || " | INS. " || pastorals.name || " | N. " || levels.name as fullnamename' ))
			->join('curricula', 'curricula.id', '=', 'levels.curriculum_id')
			->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
			->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id')
			->pluck('fullnamename','id'); //dd($curricula_list_fullname);
		return $curricula_list;
	}

    public function getPensumsAttribute()
    {
        $level = Level::find($this->id);
        $courses = ($level) ? Course::select('courses.id',DB::raw('courses.code || " - " || courses.name as name' ))
            ->join('pensums', 'courses.id', '=', 'pensums.course_id')
            ->where('pensums.level_id',$level->id)
            ->get()
            :  collect();
        return $courses;
    }

}
