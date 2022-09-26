<?php
namespace App\Models\app\Pescolar\Traits\Lapse;

trait LapseRelations {

    public function curriculum()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Curriculum');
    }
    ///////////////////////////////////////////////////////////////////////////////////    
}

