<?php
namespace App\Models\sys\Extension\User;

use App\Models\sys\Profile;
use App\Models\sys\Rol;

trait TraitsRelations {

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function role()
    {
        return $this->hasOne(Rol::class);
    }

}
