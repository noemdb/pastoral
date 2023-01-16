<?php
namespace App\Models\app\Pescolar\Traits\Level;

trait LevelRelations {

    public function lapse()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Lapse');
    }
    ///////////////////////////////////////////////////////////////////////////////////
}

?>
