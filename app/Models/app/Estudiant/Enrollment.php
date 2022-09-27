<?php

namespace App\Models\app\Estudiant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Estudiant\Traits\Competitor\EnrollmentRelations;

class Enrollment extends Model
{
    use HasFactory;
    use EnrollmentRelations;

    protected $dates = ['created_at','updated_at'];

    protected $fillable = [
        'pastoral_id','representant_name','representant_ci','citype_id','laterality','twitter','whatsapp','facebook','ci','patology','lastname','name','curriculum_id','gender',
        'date_birth','city_birth','state_birth','country_birth','dir_address','phone','email','observations',
        'status','status_nacionality','status_patology','description'
    ];

    const COLUMN_COMMENTS = [
        'pastoral_id' => 'Institución',
        'representant_ci' => 'CI del representante',
        'representant_name' => 'Nombre del representante',
        'citype_id' => 'Tipo de identificación',
        'ci'=>'N. de Identificación',
        'name'=>'Nombres del estudiante',
        'lastname'=>'Apellidos del estudiante',
        'fullname'=>'Nombre',
        'curriculum_id'=>'Plan de Estudio',
        'gender'=>'Genero',
        'laterality'=>'Lateralidad',
        'date_birth'=>'Fecha de nacimiento',
        'city_id'=>'Ciudad de nacimiento',
        'state_id'=>'Estado de nacimiento',
        'country_id'=>'País de nacimiento',
        'dir_address'=>'Dirección de residencia',
        'phone'=>'Número de teléfono',
        'email'=>'Correo electrónico',
        'twitter'=>'Twitter',
        'whatsapp'=>'WhatsApp',
        'facebook'=>'Facebook',
        'patology'=>'Patologías que deban ser mensionadas',
        'status_nacionality'=>'Nacionalizado',
        'status_patology'=>'Tratado por especialistas',
        'status'=>'Estado',
        'description'=>'Descripción',
        'observations'=>'Observaciones'
    ];
}
/*

pastoral_id,representant_ci,representant_name,citype_id,ci,name,lastname,fullname,curriculum_id,gender,laterality,date_birth,city_id,state_id,country_id,dir_address,phone,email,twitter,whatsapp,facebook,patology,status_nacionality,status_patology,status,description,observations,


pastoral_id
representant_ci
representant_name
citype_id
ci
name
lastname
fullname
curriculum_id
gender
laterality
date_birth
city_id
state_id
country_id
dir_address
phone
email
twitter
whatsapp
facebook
patology
status_nacionality
status_patology
status
description
observations

pastoral_id
representant_ci
representant_name
citype_id
ci
name
lastname
fullname
curriculum_id
gender
laterality
date_birth
city_id
state_id
country_id
dir_address
phone
email
twitter
whatsapp
facebook
patology
status_nacionality
status_patology
status
description
observations
*/
