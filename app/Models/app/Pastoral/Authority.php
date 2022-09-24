<?php

namespace App\Models\app\Pastoral;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Pastoral\Traits\Authority\Relations;

use App\Models\app\Pastoral;
use App\Models\app\Pastoral\Tauthority;

class Authority extends Model
{
    use HasFactory;
    use Relations;

    protected $fillable = [
        'tauthority_id','pescolar_id','pastoral_id','name','lastname','ci','position','profile_professional','photo','finicial','ffinal'
    ];

    const COLUMN_COMMENTS = [
		'tauthority_id' => 'Autoridad',
		'pescolar_id' => 'P.Escolar',
		'pastoral_id' => 'Institución',
		'name' => 'Nombres',
		'lastname' => 'Apellidos',
		'ci' => 'CI Identificador',
		'position' => 'Posición',
		'profile_professional' => 'Perfil Profesional',
		'photo' => 'Foto',
		'finicial' => 'Fecha Inicial',
		'ffinal' => 'Fecha Final',
    ];

    public static function pastorals_list() 
	{
		return Pastoral::pluck('name','id');
	}

	public static function tauthority_list() 
	{
		return Tauthority::pluck('name','id');
	}
}


/* 

'tauthority_id','pescolar_id','pastoral_id','name','lastname','ci','position','profile_professional','photo','finicial','ffinal',

'tauthority_id' => 'tauthority_id',
'pescolar_id' => 'pescolar_id',
'pastoral_id' => 'pastoral_id',
'name' => 'name',
'lastname' => 'lastname',
'ci' => 'ci',
'position' => 'position',
'profile_professional' => 'profile_professional',
'photo' => 'photo',
'finicial' => 'finicial',
'ffinal' => 'ffinal',

*/