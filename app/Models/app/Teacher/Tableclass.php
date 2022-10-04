<?php

namespace App\Models\app\Teacher;

/*
user_id
topic_id
title
messege
footer

*/

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Teacher\Traits\Professorate\TableclassRelations;

class Tableclass extends Model
{
    use HasFactory;
    use TableclassRelations;

    protected $fillable = [
		'user_id','topic_id','title','messege','footer',
	];

    const COLUMN_COMMENTS = [
		'user_id'=>'Usuario',
		'topic_id'=>'Tema',
		'title'=>'Título',
		'messege'=>'Mensaje',
		'footer'=>'Pie de pag.'
    ];

}

/*
'user_id','topic_id','title','messege','footer',

user_id
topic_id
title
messege
footer

*/