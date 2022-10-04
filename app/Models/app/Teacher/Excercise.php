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
		'status_resolved'=>'Resolución',
		'color'=>'color',
		'header'=>'header',
		'body'=>'body',
		'footer'=>'footer',
        'attachment'=>'attachment',
        'status'=>'status'
    ];

    public static function excercises_list() 
	{
        $excercises = Excercise::select('excercises.*')
        ->SelectRaw(' pastorals.name || " - " || pescolars.name || " - " || curricula.name || " - " || courses.code || " " || courses.name || " " || excercises.objetivo as nameExcercise ')
        ->join('topics', 'topics.id', '=', 'excercises.topic_id')
        ->join('pevaluations', 'pevaluations.id', '=', 'topics.pevaluation_id')
        ->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
        ->join('courses', 'courses.id', '=', 'pensums.course_id')
		->join('curricula', 'curricula.id', '=', 'courses.curriculum_id')
		->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
		->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id')
        ->pluck('nameExcercise','id');
        return $excercises;
	}

	public function getPevaluationAttribute() 
    {
        $curriculum = Pevaluation::select('pevaluations.*')
		->join('topics', 'pevaluations.id', '=', 'topics.pevaluation_id')
		->join('excercises', 'topics.id', '=', 'excercises.topic_id')
		->where('excercises.id',$this->id)
		->first();
        return $curriculum;
    }

	public function getCurriculumAttribute() 
    {
        $curriculum = Excercise::select('curricula.*')
		->join('topics', 'topics.id', '=', 'excercises.topic_id')
		->join('pevaluations', 'pevaluations.id', '=', 'evaluations.pevaluation_id')
		->join('lapses', 'lapses.id', '=', 'pevaluations.lapse_id')
		->join('curricula', 'curricula.id', '=', 'lapses.curriculum_id')
		->where('pevaluations.id',$this->id)
		->first();
        return $curriculum;
    }
}

/*


'topic_id','objetivo','description','observations','status_resolved','color','header','body','footer','attachment','status',

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