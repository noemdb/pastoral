<?php

namespace App\Models\app\Pastoral;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Pastoral\Traits\Authority\AuthorityRelations;

use App\Models\app\Pastoral;
use App\Models\app\Pastoral\Tauthority;

use Carbon\Carbon;

class Authority extends Model
{
    use HasFactory;

    use AuthorityRelations;

    protected $fillable = [
        'tauthority_id','pastoral_id','name','lastname','ci','position','profile_professional','photo','finicial','ffinal'
	];
	
	protected $dates = ['finicial','ffinal','created_at','updated_at'];

    const COLUMN_COMMENTS = [
		'tauthority_id' => 'Tipo',
		'pastoral_id' => 'Institución',
		'name' => 'Nombres',
		'lastname' => 'Apellidos',
		'ci' => 'CI.Ident.',
		'position' => 'Posición',
		'profile_professional' => 'Perfil Profesional',
		'photo' => 'Foto',
		'finicial' => 'Fecha Inicial',
		'ffinal' => 'Fecha Final',
	];

	public function getFinicialAttribute()
    {
        return  Carbon::parse($this->attributes['finicial'])->format('Y-m-d');
    }
    
    public function getFfinalAttribute()
    {
        return  Carbon::parse($this->attributes['ffinal'])->format('Y-m-d');
    }
	
	public function getFullNameAttribute()
    {
        return "{$this->name} {$this->lastname}";
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