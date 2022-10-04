<?php

namespace App\Models\app\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\app\Teacher\Traits\Professorate\LessonRelations;

class Lesson extends Model
{
    use HasFactory;

    use LessonRelations;

    protected $fillable = [
		'topic_id','duration','description','observations','color','header','body','attachment','footer','status',
	];

    const COLUMN_COMMENTS = [
		'topic_id'=>'Tema',
		'duration'=>'Duración (min)',
		'description'=>'Descripción',
		'observations'=>'Observaciones',
		'color'=>'color',
		'header'=>'header',
		'body'=>'body',
		'attachment'=>'attachment',
		'footer'=>'footer',
        'status'=>'status',
		///////////////////////
        'pensum'=>'Asignatura'
    ];

    public static function lessons_list() 
	{
        $lessons = Lesson::select('lessons.*')
        ->SelectRaw(' pastorals.name || " - " || pescolars.name || " - " || curricula.name || " - " || courses.code || " " || courses.name as nameLesson ')
        ->join('topics', 'topics.id', '=', 'lessons.topic_id')
        ->join('pevaluations', 'pevaluations.id', '=', 'topics.pevaluation_id')
        ->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
        ->join('courses', 'courses.id', '=', 'pensums.course_id')
		->join('curricula', 'curricula.id', '=', 'courses.curriculum_id')
		->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
		->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id')
        ->pluck('nameLesson','id');
        return $lessons;
	}

	public function getCurriculumAttribute() 
    {
        $curriculum = Topic::select('curricula.*')
		->join('pevaluations', 'pevaluations.id', '=', 'evaluations.pevaluation_id')
		->join('lapses', 'lapses.id', '=', 'pevaluations.lapse_id')
		->join('curricula', 'curricula.id', '=', 'lapses.curriculum_id')
		->where('pevaluations.id',$this->id)
		->first();
        return $curriculum;
    }

	public function getPevaluationAttribute() 
    {
        $curriculum = Pevaluation::select('pevaluations.*')
		->join('topics', 'pevaluations.id', '=', 'topics.pevaluation_id')
		->join('lessons', 'topics.id', '=', 'lessons.topic_id')
		->where('lessons.id',$this->id)
		->first();
        return $curriculum;
    }
}

/*

'topic_id','duration','description','observations','color','header','body','attachment','footer','status',

topic_id
duration
description
observations
color
header
body
attachment
footer
status

*/