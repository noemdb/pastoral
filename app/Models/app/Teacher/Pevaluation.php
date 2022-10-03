<?php

namespace App\Models\app\Teacher;

use App\Models\app\Pescolar\Curriculum;
use App\Models\app\Teacher\Traits\Professorate\PevaluationRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pevaluation extends Model
{
    use HasFactory;

    use PevaluationRelations;

    protected $fillable = [
		'teacher_id','pensum_id','lapse_id','section_id','objetivo','description','observations','color','header','body','footer','attachment','status',
	];

    const COLUMN_COMMENTS = [
		'teacher_id'=>'Catequista',
		'pensum_id'=>'Asignatura',
		'lapse_id'=>'Cortes',
		'section_id'=>'Grupo',
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
		////////////////////
		'location'=>'Localización',
    ];

    public static function pevaluations_list() 
	{
        $pevaluations = Pevaluation::select('pevaluations.*')
		->SelectRaw(' pastorals.name || " - " || pescolars.name || " - " || curricula.name || " - " || courses.code || " " || courses.name as namePevaluation ')
        ->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
        ->join('courses', 'courses.id', '=', 'pensums.course_id')

		->join('curricula', 'curricula.id', '=', 'courses.curriculum_id')
		->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
		->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id')

        ->pluck('namePevaluation','id');
        return $pevaluations;
	}

	public function getCurriculumAttribute() 
    {
        $curriculum = Pevaluation::select('curricula.*')
		->join('lapses', 'lapses.id', '=', 'pevaluations.lapse_id')
		->join('curricula', 'curricula.id', '=', 'lapses.curriculum_id')
		->where('pevaluations.id',$this->id)
		->first();
        return $curriculum;
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