<?php

namespace App\Models\app\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Teacher\Traits\Professorate\TopicRelations;

class Topic extends Model
{
    use HasFactory;

    use TopicRelations;

    protected $fillable = [
		'pevaluation_id','description','objetivo','observations','color','header','body','footer','attachment','status'
	];

    const COLUMN_COMMENTS = [
		'pevaluation_id'=>'Planificación',
		'objetivo'=>'objetivo',
		'description'=>'description',
		'observations'=>'observations',
		'color'=>'color',
		'header'=>'header',
		'body'=>'body',
		'footer'=>'footer',
		'attachment'=>'attachment',
		'status'=>'status'
    ];

    public static function topics_list() 
	{
        $topics = Topic::select('topics.*')
			->SelectRaw(' pastorals.name || " - " || pescolars.name || " - " || curricula.name || " - " || courses.code || " " || courses.name || " " || topics.description as nameTopic ')
			->join('pevaluations', 'pevaluations.id', '=', 'topics.pevaluation_id')
			->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
			->join('courses', 'courses.id', '=', 'pensums.course_id')
			->join('curricula', 'curricula.id', '=', 'courses.curriculum_id')
			->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
			->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id')
			->pluck('nameTopic','id');
        return $topics;
	}

	public function getCurriculumAttribute() 
    {
        $curriculum = Topic::select('curricula.*')
		->join('topics', 'topics.id', '=', 'topics.pevaluation_id')
		->join('lapses', 'lapses.id', '=', 'pevaluations.lapse_id')
		->join('curricula', 'curricula.id', '=', 'lapses.curriculum_id')
		->where('pevaluations.id',$this->id)
		->first();
        return $curriculum;
    }
}


/*

'pevaluation_id','description','objetivo','observations','color','header','body','footer','attachment','status'

pevaluation_id
description
objetivo
observations
color
header
body
footer
attachment
status

*/