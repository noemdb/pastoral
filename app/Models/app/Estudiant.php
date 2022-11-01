<?php

namespace App\Models\app;

use App\Models\app\Estudiant\Traits\Competitor\EstudiantRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiant extends Model
{
    use HasFactory;
    use EstudiantRelations;

    protected $fillable = [
        'user_id','representant_id','citype_id','ci','name','lastname','gender','date_birth','country_id','state_id','city_id','dir_address','phone','email','status_nacionality',
    ];

    const COLUMN_COMMENTS = [
        'user_id' => 'Usuario',
        'representant_id' => 'Responsable',
        'citype_id' => 'Tipo de CI',
        'ci'=>'CI',
        'name'=>'Nombres',
        'lastname'=>'Apellidos',
        'gender'=>'Género',
        'date_birth'=>'Fecha de Nacimiento',
        'country_id'=>'País de Nacimiento',
        'state_id'=>'Estado de Nacimiento',
        'city_id'=>'Ciudad de Nacimiento',
        'dir_address'=>'Direccón de residencia',
        'phone'=>'Teléfono',
        'email'=>'Correo Electrónico',
        'status_nacionality'=>'Nacionalizado',
        'laterality'=>'Lateralidad',
        'christening_place'=>'Lugar del bautizo',
        'christening_date'=>'Fecha del bautizo',
        'extracathedra'=>'Actividad Extracatedra',
        'institution'=>'Institución Educativa',
        'academic_level'=>'Año académico',
        'academic_section'=>'Sección',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->lastname}";
    }

    public static function estudiant_list_fullname() 
    {
        $estudiants = Estudiant::select('estudiants.id')
            ->SelectRaw(' estudiants.ci  ||  estudiants.name || " - " || estudiants.lastname as name ')
            ->pluck('name','id');
        return $estudiants;
    }
}


/*

'user_id','representant_id','citype_id','ci','name','lastname','gender','date_birth','country_id','state_id','city_id','dir_address','phone','email','status_nacionality',

user_id
representant_id
citype_id
ci
name
lastname
gender
date_birth
country_id
state_id
city_id
dir_address
phone
email
status_nacionality

laterality
christening_place
christening_date
extracathedra
institution
academic_level
academic_section

'laterality'=>'Lateralidad'
'christening_place'=>'Lugar del bautizo'
'christening_date'=>'Fecha del bautizo'
'extracathedra'=>'Actividad Extracatedra'
'institution'=>'Institución Educativa'
'academic_level'=>'Año académico'
'academic_section'=>'Sección'

'user_id' => 'user_id'
'representant_id' => 'representant_id'
'citype_id' => 'citype_id'
'ci' => 'ci'
'name' => 'name'
'lastname' => 'lastname'
'gender' => 'gender'
'date_birth' => 'date_birth'
'country_id' => 'country_id'
'state_id' => 'state_id'
'city_id' => 'city_id'
'dir_address' => 'dir_address'
'phone' => 'phone'
'email' => 'email'
'status_nacionality' => 'status_nacionality'

*/