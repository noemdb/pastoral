<?php
namespace App\Models\sys\Extension\User;

use App\Models\app\Pastoral;
use App\Models\sys\Profile;
use App\Models\sys\Rol;
use Carbon\Carbon;

trait TraitsPastoral {

    public function getPastoralAttribute()
    {
        if ($this->rol) 
            if ($this->rol->pastoral) 
                return $this->rol->pastoral;        
    }

    public function getPastoralNameAttribute()
    {      
      return ($this->pastoral) ? $this->pastoral->name : null;
    }
    public function getPastoralCodeAttribute()
    {      
      return ($this->pastoral) ? $this->pastoral->code : null;
    }

}
