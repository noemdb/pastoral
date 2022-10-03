<?php

namespace App\Models\app\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\app\Teacher\Traits\Professorate\EvaluationRelations;

class Evaluation extends Model
{
    use HasFactory;

    use EvaluationRelations;

    protected $fillable = [
		'pevaluation_id','objetivo','description','observations','date','color','header','body','footer','attachment','status',
	];

    const COLUMN_COMMENTS = [
		'pevaluation_id'=>'Planificación',
		'objetivo'=>'objetivo',
		'description'=>'description',
		'observations'=>'observations',
		'date'=>'Fecha',
		'color'=>'color',
		'header'=>'header',
		'body'=>'body',
		'footer'=>'footer',
		'attachment'=>'attachment',
		'status'=>'status'
    ];

    public static function evaluations_list() 
	{
        $pevaluations = Evaluation::select('evaluations.*')
        ->selectRaw('evaluations.objetivo || " - " || evaluations.description as name')
        ->pluck('name','id');
        return $pevaluations;
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

'pevaluation_id','objetivo','description','observations','date','color','header','body','footer','attachment','status',

pevaluation_id
objetivo
description
observations
date
color
header
body
footer
attachment
status

*/