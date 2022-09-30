<?php

namespace App\Models\app\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiTeacher extends Model
{
    use HasFactory;


    public static function ti_teacher_list() 
	{
		return TiTeacher::pluck('name','id');
	}
}
