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
        'pastoral_id','name','lastname','citype_id','ci','curriculum_id','gender','laterality','date_birth','country_id','state_id','city_id','dir_address','christening_place','christening_date','phone','extracathedra','email','institution','academic_level','academic_section','representant_name','representant_ci','representant_email','kinship','profession','representant_phone','twitter','instagram','whatsapp','facebook','patology','status_nacionality','status_patology','status','description','observations',
    ];

    const COLUMN_COMMENTS = [
        'pastoral_id'=>'Pastoral',
        'name'=>'Nombres',
        'lastname'=>'Apellidos',
        'citype_id'=>'Tipo de identificación',
        'ci'=>'N. de Identificación',
        'curriculum_id'=>'Plan de Estudio',
        'gender'=>'Genero',
        'laterality'=>'Lateralidad',
        'date_birth'=>'Fecha de nacimiento',
        'country_id'=>'País de nacimiento',
        'state_id'=>'Estado de nacimiento',
        'city_id'=>'Ciudad de nacimiento',
        'dir_address'=>'Dirección de residencia',
        'christening_place'=>'Lugar del bautizo',
        'christening_date'=>'Fecha del bautizo',
        'phone'=>'Número de teléfono',
        'extracathedra'=>'Actividad Extracatedra',
        'email'=>'Correo electrónico',
        'institution'=>'Institución Educativa',
        'academic_level'=>'Año académico',
        'academic_section'=>'Sección',
        'representant_name'=>'Nombre del representante',
        'representant_ci'=>'CI del representante',
        'representant_email'=>'Correo electrónico del representante',
        'representant_phone'=>'Número de teléfono del representante',
        'kinship'=>'Parentesco',
        'profession'=>'Profesión',                
        'twitter'=>'Twitter',
        'instagram'=>'Instagram',
        'whatsapp'=>'WhatsApp',
        'facebook'=>'Facebook',
        'patology'=>'Patologías que deban ser mencionadas',
        'status_nacionality'=>'Nacionalizado',
        'status_patology'=>'Tratado por especialistas',
        'status'=>'Estado',
        'description'=>'Descripción',
        'observations'=>'Observaciones',
    ];

    public static function gender_list()
    {
        return [
            'Masculino'=>'Masculino',
            'Femenino'=>'Femenino',
        ];
    }
    public static function laterality_list()
    {
        return [
            'Izquierda(o)'=>'Izquierda(o)',
            'Derecha(o)'=>'Derecha(o)',
        ];
    }
    public static function kinship_list()
    {
        return [
            'Abuelo(a)'=>'Abuelo(a)',
            'Padre/Madre'=>'Padre/Madre',
            'Tío(a)'=>'Tío(a)',
            'Hermano(a)'=>'Hermano(a)',
            'Otro'=>'Otro',
        ];
    }
    public static function academic_level_list()
    {
        return [
            '1ER GRADO'=>'1ER GRADO',
            '2DO GRADO'=>'2DO GRADO',
            '3ER GRADO'=>'3ER GRADO',
            '4TO GRADO'=>'4TO GRADO',
            '5TO GRADO'=>'5TO GRADO',
            '6TO GRADO'=>'6TO GRADO',
            '1ER AÑO'=>'1ER AÑO',
            '2DO AÑO'=>'2DO AÑO',
            '3ER AÑO'=>'3ER AÑO',
            '4TO AÑO'=>'4TO AÑO',
            '5TO AÑO'=>'5TO AÑO',
        ];
    }
    public static function academic_section_list()
    {
        return [
            'A'=>'A',
            'B'=>'B',
            'C'=>'C',
            'D'=>'D',
            'E'=>'E',
            'Otra'=>'Otra',
        ];
    }
}
/*

'pastoral_id',name','lastname','citype_id','ci','curriculum_id','gender','laterality','date_birth','country_id','state_id','city_id','dir_address','christening_place','christening_date','phone','extracathedra','email','institution','academic_level','academic_section','representant_name','representant_ci','representant_email','kinship','profession','representant_phone','twitter','instagram','whatsapp','facebook','patology','status_nacionality','status_patology','status','description','observations',

'pastoral_id'=>'Pastoral',
'name'=>'Nombres',
'lastname'=>'Apellidos',
'citype_id'=>'Tipo de identificación',
'ci'=>'N. de Identificación',
'curriculum_id'=>'Plan de Estudio',
'gender'=>'Genero',
'laterality'=>'Lateralidad',
'date_birth'=>'Fecha de nacimiento',
'country_id'=>'País de nacimiento',
'state_id'=>'Estado de nacimiento',
'city_id'=>'Ciudad de nacimiento',
'dir_address'=>'Dirección de residencia',
'christening_place'=>'Lugar del bautizo',
'christening_date'=>'Fecha del bautizo',
'phone'=>'Número de teléfono',
'extracathedra'=>'Actividad Extracatedra',
'email'=>'Correo electrónico',
'institution'=>'Institución Educativa',
'academic_level'=>'Año académico',
'academic_section'=>'Sección',
'representant_name'=>'Nombre del representante',
'representant_ci'=>'CI del representante',
'kinship'=>'Parentesco',
'profession'=>'Profesión',
'representant_phone'=>'Número de teléfono del representante',
'twitter'=>'Twitter',
'instagram'=>'Instagram',
'whatsapp'=>'WhatsApp',
'facebook'=>'Facebook',
'patology'=>'Patologías que deban ser mencionadas',
'status_nacionality'=>'Nacionalizado',
'status_patology'=>'Tratado por especialistas',
'status'=>'Estado',
'description'=>'Descripción',
'observations'=>'Observaciones',


pastoral_id
name
lastname
citype_id
ci
curriculum_id
gender
laterality
date_birth
country_id
state_id
city_id
dir_address
christening_place
christening_date
phone
extracathedra
email
institution
academic_level
academic_section
representant_name
representant_ci
kinship
profession
representant_phone
twitter
instagram
whatsapp
facebook
patology
status_nacionality
status_patology
status
description
observations

*/
