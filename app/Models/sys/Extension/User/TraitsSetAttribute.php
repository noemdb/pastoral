<?php
namespace App\Models\sys\Extension\User;

use App\Models\sys\Profile;
use App\Models\sys\Rol;

trait TraitsSetAttribute {

    public function setPasswordAttribute($value){
        if (! empty($value)) {
            $this->attributes['password'] = bcrypt($value);
        }
    }

}
