<?php

namespace App\Models\app;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\app\Teacher\Traits\Professorate\TeacherRelations;
use Illuminate\Support\Facades\DB;

class Teacher extends Model
{
    use HasFactory;
    use TeacherRelations;

    protected $fillable = [
		'user_id','ti_teacher_id','ci_profesor','lastname','name','gender','date_birth','dir_address','phone','cellphone','email','status',
	];

    const COLUMN_COMMENTS = [
		'user_id'=>'Usuario',
		'ti_teacher_id'=>'Tipo',
		'ci_profesor'=>'CI. Ident.',
		'lastname'=>'Apellidos',
		'name'=>'Nombres',
		'gender'=>'Género',
		'date_birth'=>'F.Nacimiento',
		'dir_address'=>'Dirección de Residencia',
		'phone'=>'Telèfono',
		'cellphone'=>'Telef.Celular',
		'email'=>'C.Electrónico',
		'whatsapp'=>'Whatsapp',
		'telegram'=>'Telegram',
		'twitter'=>'Twitter',
		'instagram'=>'Instagram',
		'status'=>'Estado',
    ];

    public static function teachers_list() 
	{
		$teachers = Teacher::select('teachers.id', DB::raw('teachers.ci_profesor || " - " || teachers.name || " - " || teachers.lastname as teacherFullName' ) )
            ->pluck('teacherFullName','id');
		return $teachers;
	}

	public function getFullNameAttribute()
    {
        return "{$this->name} {$this->lastname}";
    }
}

/*
user_id
ti_teacher_id
ci_profesor
lastname
name
gender
date_birth
dir_address
phone
cellphone
email
whatsapp
telegram
twitter
instagram
status


user_id
ti_teacher_id
ci_profesor
lastname
name
gender
date_birth
dir_address
phone
cellphone
email
whatsapp
telegram
twitter
instagram
status


user_id
ti_teacher_id
ci_profesor
lastname
name
gender
date_birth
dir_address
phone
cellphone
email
whatsapp
telegram
twitter
instagram
status


*/