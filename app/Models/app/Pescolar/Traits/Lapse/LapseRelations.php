<?php
namespace App\Models\app\Pescolar\Traits\Lapse;

use App\Models\app\Pescolar\Level;

trait LapseRelations {

    public function curriculum()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Curriculum');
    }
    // public function levels()
    // {
    //     return $this->hasMany(Level::class);
    // }
    ///////////////////////////////////////////////////////////////////////////////////
}

