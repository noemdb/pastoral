<?php

namespace App\Models\sys;

use App\Models\app\Pastoral;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public function user() { return $this->belongsTo(User::class); }
    public function pastoral() { return $this->belongsTo(Pastoral::class); }

    protected $fillable = [ 'user_id','pastoral_id','area','rol','description','observation','finicial','ffinal' ];

    const COLUMN_COMMENTS = [
        'user_id'=>'user_id',
        'pastoral_id'=>'Pastoral',
        'area'=>'area',
        'rol'=>'rol',
        'description'=>'description',
        'observation'=>'observation',
        'finicial'=>'finicial',
        'ffinal'=>'ffinal',
        'name' =>'Nombre de usuario',
        'email' =>'Email',
        'phone' =>'Teléfono',
        'role' =>'Rol',
    ];

    public static function list_area() /* usada para llenar los objetos de formularios select*/
    {
        return ['SISTEMA'=>'SISTEMA','PRESIDENCIA'=>'PRESIDENCIA','DIRECCIÓN'=>'DIRECCIÓN','SECRETARÍA'=>'SECRETARÍA','COORDINACION'=>'COORDINACION','FORMADORES'=>'FORMADORES','ASPIRANTADO'=>'ASPIRANTADO','COMUNIDAD'=>'COMUNIDAD'];
    }

    public static function list_rol() /* usada para llenar los objetos de formularios select*/
    {
        return ['ADMINISTRADOR'=>'ADMINISTRADOR','PRESIDENTE'=>'PRESIDENTE','DIRECTOR'=>'DIRECTOR','SECRETARIO'=>'SECRETARIO','COORDINADOR'=>'COORDINADOR','CATEQUISTA'=>'CATEQUISTA','COOPERADOR'=>'COOPERADOR','RELIGIOSO'=>'RELIGIOSO','SUPERVISOR'=>'SUPERVISOR','SUPLENTE'=>'SUPLENTE','JEFE'=>'JEFE','ASISTENTE'=>'ASISTENTE','CATEQUIZANDO'=>'CATEQUIZANDO','REPRESENTANTE'=>'REPRESENTANTE','PERSONAL'=>'PERSONAL'];
    }
}

/*

*/