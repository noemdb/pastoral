<?php

namespace App\Models\app\Teacher;

use App\Models\app\Teacher\Traits\Professorate\PevaluationRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pevaluation extends Model
{
    use HasFactory;

    use PevaluationRelations;

    protected $fillable = [
		'teacher_id','pensum_id','lapse_id','section_id','objetivo','description','observations','color','header','body','footer','attachment','status',
	];

    const COLUMN_COMMENTS = [
		'teacher_id'=>'Catequista',
		'pensum_id'=>'Pensum',
		'lapse_id'=>'Cortes.',
		'section_id'=>'Sección',
		'objetivo'=>'Objetivo',
		'description'=>'Descripción',
		'observations'=>'Observaciones',
		'color'=>'Color',
		'header'=>'Tìtulo',
		'body'=>'Cuerpo',
		'footer'=>'Pie de Pag.',
		'attachment'=>'Adjunto',
		'status'=>'Estado',
		'twitter'=>'Twitter',
		'instagram'=>'Instagram',
		'status'=>'Estado',
    ];

    public static function pevaluations_list() 
	{
        $pevaluations = Pevaluation::select('pevaluations.*',DB::raw('courses.code || " - " || courses.name as name' ))
        ->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
        ->join('courses', 'courses.id', '=', 'pensums.course_id')
        ->pluck('name','id');
        return $pevaluations;
	}
}


/*

'teacher_id','pensum_id','lapse_id','section_id','objetivo','description','observations','color','header','body','footer','attachment','status',

teacher_id
pensum_id
lapse_id
section_id
objetivo
description
observations
color
header
body
footer
attachment
status

teacher_id
pensum_id
lapse_id
section_id
objetivo
description
observations
color
header
body
footer
attachment
status

*/