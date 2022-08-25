<?php

namespace App\Models\app\Estudiant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $dates = ['created_at','updated_at'];

    protected $fillable = [
        'pastoral_id','citype_id','laterality','twitter','whatsapp','facebook','ci','patology','lastname','name','gender',
        'date_birth','city_birth','town_hall_birth','state_birth','country_birth','dir_address','phone','email','observations',
        'status','status_nacionality','description'
    ];

    const COLUMN_COMMENTS = [
        'pastoral_id' => 'Institución',
        'citype_id' => 'Tipo de identificación',
        'ci'=>'N. de Identificación',
        'name'=>'Nombres',
        'lastname'=>'Apellidos',
        'fullname'=>'Nombre',
        'levels'=>'Nivel',
        'gender'=>'Genero',
        'laterality'=>'Lateralidad',
        'date_birth'=>'Fecha de nacimiento',
        'city_birth'=>'Ciudad de nacimiento',
        'town_hall_birth'=>'Municipio de nacimiento',
        'state_birth'=>'Estado de nacimiento',
        'country_birth'=>'País de nacimiento',
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
$table->string('name')->comment('Nombres');
$table->string('lastname')->comment('Apellidos');
$table->integer('citype_id')->unsigned()->default(1)->comment('Tipo de identificación');
$table->string('ci')->comment('N. de Identificación');
$table->string('levels')->comment('Nivel');
$table->enum('gender',['Masculino', 'Femenino'])->nullable()->comment('Genero');//Másculino,Femenino
$table->enum('laterality',['Izquierda(o)', 'Derecha(o)'])->nullable()->comment('Genero');//Másculino,Femenino
$table->date('date_birth')->nullable()->comment('Fecha de nacimiento');
$table->string('city_birth')->nullable()->comment('Ciudad de nacimiento');
$table->string('town_hall_birth')->nullable()->comment('Municipio de nacimiento');
$table->string('state_birth')->nullable()->comment('Estado de nacimiento');
$table->string('country_birth')->nullable()->comment('País de nacimiento');
$table->string('dir_address')->nullable()->comment('Dirección de residencia');
$table->string('phone')->nullable()->comment('Número de teléfono fijo');
$table->string('email')->nullable()->comment('Correo electrónico');
$table->string('twitter')->nullable()->comment('Twitter');
$table->string('instagram')->nullable()->comment('Instagram');
$table->string('whatsapp')->nullable()->comment('WhatsApp');
$table->string('facebook')->nullable()->comment('Facebook');
$table->string('patology')->nullable()->comment('Patologías que deban ser mensionadas');
$table->boolean('status_nacionality')->nullable()->comment('Nacionalizado');

$table->boolean('status')->default(true)->comment('Estado');
$table->string('description')->nullable();
$table->string('observations')->nullable()->comment('Observaciones');

*/
