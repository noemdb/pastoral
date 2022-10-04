<?php

namespace App\Models\app\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Teacher\Traits\Professorate\DocumentRelations;

class Document extends Model
{
    use HasFactory;

    use DocumentRelations;

    protected $fillable = [
		'user_id','publication_id','description','observations','color','header','body','footer','attachment','status',
	];

    const COLUMN_COMMENTS = [
		'user_id'=>'Usuario',
		'teacher_id'=>'Catequista',
		'publication_id'=>'Publicación',
		'description'=>'description',
		'observations'=>'observations',
		'color'=>'color',
		'header'=>'header',
		'body'=>'body',
		'footer'=>'footer',
        'attachment'=>'attachment',
        'status'=>'status'
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

'user_id','publication_id','description','observations','color','header','body','footer','attachment','status',

user_id
publication_id
description
observations
color
header
body
footer
attachment
status

*/
