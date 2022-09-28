<?php

namespace App\Models\app;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiant extends Model
{
    use HasFactory;

    public static function estudiant_list_fullname() 
    {
        $estudiants = Estudiant::select('estudiants.id')
            ->SelectRaw(' estudiants.ci  ||  estudiants.name || " - " || estudiants.lastname as name ')
            ->pluck('name','id');
        return $estudiants;
    }
}


/*

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

*/