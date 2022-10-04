<?php

namespace App\Models\app\Teacher;

use App\Models\app\Teacher\Traits\Professorate\ExcerciseRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resolution extends Model
{
    use HasFactory;

    use ExcerciseRelations;

    protected $fillable = [
		'excercise_id','description','observations','color','header','body','attachment','footer',
	];

    const COLUMN_COMMENTS = [
		'excercise_id'=>'Ejercicio',
		'description'=>'description',
		'observations'=>'observations',
		'color'=>'color',
		'header'=>'header',
		'body'=>'body',
		'attachment'=>'attachment',
		'footer'=>'footer',

		'pensum'=>'Asignatura',
		'pevaluation_id'=>'Programación',
    ];

	public function getPevaluationAttribute() 
    {
        $pevaluation = Pevaluation::select('pevaluations.*')
		->join('topics', 'pevaluations.id', '=', 'topics.pevaluation_id')
		->join('excercises', 'topics.id', '=', 'excercises.topic_id')
		->join('resolutions', 'excercises.id', '=', 'resolutions.excercise_id')
		->where('resolutions.id',$this->id)
		->first();
        return $pevaluation;
    }
}

/*

'excercise_id','description','observations','color','header','body','attachment','footer',

excercise_id
description
observations
color
header
body
attachment
footer

*/
