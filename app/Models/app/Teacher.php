<?php

namespace App\Models\app;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\app\Teacher\Traits\Teacher\TeacherRelations;

class Teacher extends Model
{
    use HasFactory;
    use TeacherRelations;

    protected $fillable = [
		'ti_teacher_id','ci_profesor','lastname','name','gender','date_birth','city_birth','dir_address','phone','cellphone','email','status',
	];

    const COLUMN_COMMENTS = [
		'ti_teacher_id'=>'ti_teacher_id',
		'ci_profesor'=>'ci_profesor',
		'lastname'=>'lastname',
		'name'=>'name',
		'gender'=>'gender',
		'date_birth'=>'date_birth',
		'city_birth'=>'city_birth',
		'dir_address'=>'dir_address',
		'phone'=>'phone',
		'cellphone'=>'cellphone',
		'email'=>'email',
		'status'=>'status',
    ];

    public static function teachers_list() 
	{
		return Teacher::pluck('name','id');
	}
}

/*
'ti_teacher_id','ci_profesor','lastname','name','gender','date_birth','city_birth','dir_address','phone','cellphone','email','status',

ti_teacher_id
ci_profesor
lastname
name
gender
date_birth
city_birth
dir_address
phone
cellphone
email
status


ti_teacher_id
ci_profesor
lastname
name
gender
date_birth
city_birth
dir_address
phone
cellphone
email
status

*/