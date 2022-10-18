<?php

namespace App\Models\sys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','pastoral_id','area','rol','description','observation','finicial','ffinal',
    ];

    const COLUMN_COMMENTS = [
        'user_id'=>'user_id',
        'pastoral_id'=>'pastoral_id',
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
        return [
            'SISTEMA'=>'SISTEMA',
            'PRESIDENCIA'=>'PRESIDENCIA',
            'SECRETARIA'=>'SECRETARIA',
            'COORDINACION'=>'COORDINACION',
            'FORMADORES'=>'FORMADORES',
            'COMUNIDAD'=>'COMUNIDAD',
        ];
    }

    public static function list_rol() /* usada para llenar los objetos de formularios select*/
    {
        return [
            'ADMINISTRACION'=>'ADMINISTRACION',
            'PRESIDENTE'=>'PRESIDENTE',
            'SECRETARIO'=>'SECRETARIO',
            'COORDINADOR'=>'COORDINADOR',
            'CATEQUISTA'=>'CATEQUISTA',
            'SUPERVISOR'=>'SUPERVISOR',
            'SUPLENTE'=>'SUPLENTE',
            'JEFE'=>'JEFE',
            'ASISTENTE'=>'ASISTENTE',
            'PARTICIPANTE'=>'PARTICIPANTE',
            'REPRESENTANTE'=>'REPRESENTANTE',
            'PERSONAL'=>'PERSONAL'
        ];
    }
}

/*

'user_id','pastoral_id','area','rol','description','observation','finicial','ffinal',

user_id
pastoral_id
area
rol
description
observation
finicial
ffinal

*/