<?php
namespace App\Models\app\Pastoral\Traits\Authority;
//app/Models/app/Pastoral/Traits/Authority/Relations.php

trait Relations {

    public function tauthority()
    {
        return $this->belongsTo('App\Models\app\Pastoral\Tauthority');
    }
    public function pescolar()
    {
        return $this->belongsTo('App\Models\app\Pescolar');
    }
    public function pastoral()
    {
        return $this->belongsTo('App\Models\app\Pastoral');
    }
    public function planbeneficos()
    {
        return $this->hasMany('App\Models\app\Estudiante\PlanBenefico');
    }
    ///////////////////////////////////////////////////////////////////////////////////

    public function getFullNameAttribute()
    {
        return "{$this->lastname} {$this->name}";
    }
}
