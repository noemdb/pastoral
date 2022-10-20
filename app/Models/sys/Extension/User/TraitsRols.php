<?php
namespace App\Models\sys\Extension\User;

use App\Models\sys\Profile;
use App\Models\sys\Rol;
use Carbon\Carbon;

trait TraitsRols {

    public function getRolAttribute()
    {
        $now = Carbon::now()->format('Ymd');
        return Rol::Where('rols.user_id',$this->id)->where('rols.ffinal','>=',$now)->where('rols.finicial','<=',$now)->first();
    }

    public function getAreaAttribute()
    {
        return ($this->rol) ? $this->rol->area : null ;

    }

    public function getRolNameAttribute()
    {
        return ($this->rol) ? $this->rol->rol : null ;

    }

    public function getFullRolAttribute()
    {
        return ($this->rol) ?  $this->rol->area . ' - ' . $this->rol->rol : null ;

    }
    public function getCompleteRolAttribute()
    {
        return ($this->rol) ?  $this->rol->pastoral->code . ' - ' . $this->rol->area . ' - ' . $this->rol->rol : null ;

    }

    public function hasRol()
    {
        return ($this->rol) ? true:false;
    }

}
