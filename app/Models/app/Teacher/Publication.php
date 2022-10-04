<?php

namespace App\Models\app\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Teacher\Traits\Professorate\PublicationRelations;

class Publication extends Model
{
    use HasFactory;

    use PublicationRelations;

    protected $fillable = [
		'teacher_id','user_id','description','observations','color','header','body','attachment','footer','status',
	];

    const COLUMN_COMMENTS = [
		'teacher_id'=>'Catequista',
		'user_id'=>'Usuario',
		'description'=>'description',
		'observations'=>'observations',
		'color'=>'color',
		'header'=>'header',
		'body'=>'body',
		'attachment'=>'attachment',
		'footer'=>'footer',
		'status'=>'status',
		////////////////////
		'location'=>'Localización',
    ];

    public static function publications_list() 
	{
        $publications = Publication::select('publications.*')
        ->SelectRaw(' teachers.name || " - " || teachers.name || " - " || publications.description as nameTeacher ')
        ->join('teachers', 'teachers.id', '=', 'publications.teacher_id')
        ->pluck('nameTeacher','id');
        return $publications;
	}
}


/*

'teacher_id','user_id','description','observations','color','header','body','attachment','footer','status',

teacher_id
user_id
description
observations
color
header
body
attachment
footer
status

*/

