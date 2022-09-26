<?php
namespace App\Models\app\Pescolar\Traits\Level;

trait LevelRelations {

    public function curriculum()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Curriculum');
    }
    ///////////////////////////////////////////////////////////////////////////////////    
}

?>