<?php

namespace App\Models\app\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Teacher\Traits\Professorate\ExcerciseRelations;

class Excercise extends Model
{
    use HasFactory;
    use ExcerciseRelations;

    protected $fillable = [
		'topic_id','objetivo','description','observations','status_resolved','color','header','body','footer','attachment','status',
	];

    const COLUMN_COMMENTS = [
		'topic_id'=>'Tema',
		'objetivo'=>'objetivo',
		'description'=>'Descripción',
		'observations'=>'Observaciones',
		'status_resolved'=>'color',
		'color'=>'header',
		'header'=>'body',
		'body'=>'attachment',
		'footer'=>'footer',
        'attachment'=>'attachment',
        'status'=>'status'
    ];

    public static function lessons_list() 
	{
        $excercises = Excercise::select('excercises.*')
        ->SelectRaw(' pastorals.name || " - " || pescolars.name || " - " || curricula.name || " - " || courses.code || " " || courses.name as nameLesson ')
        ->join('topics', 'topics.id', '=', 'excercises.topic_id')
        ->join('pevaluations', 'pevaluations.id', '=', 'excercises.pevaluation_id')
        ->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
        ->join('courses', 'courses.id', '=', 'pensums.course_id')
		->join('curricula', 'curricula.id', '=', 'courses.curriculum_id')
		->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
		->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id')
        ->pluck('nameLesson','id');
        return $excercises;
	}

	public function getCurriculumAttribute() 
    {
        $curriculum = Evaluation::select('curricula.*')
		->join('evaluations', 'evaluations.id', '=', 'evaluations.pevaluation_id')
		->join('lapses', 'lapses.id', '=', 'pevaluations.lapse_id')
		->join('curricula', 'curricula.id', '=', 'lapses.curriculum_id')
		->where('pevaluations.id',$this->id)
		->first();
        return $curriculum;
    }
}

/*


'topic_id','objetivo','description','observations','status_resolved','color','header','body','footer','attachment','status',

topic_id
objetivo
description
observations
status_resolved
color
header
body
footer
attachment
status

*/