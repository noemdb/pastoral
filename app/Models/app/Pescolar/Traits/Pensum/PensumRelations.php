<?php
namespace App\Models\app\Pescolar\Traits\Pensum;

trait PensumRelations {

    public function level()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Level');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Course');
    }
    ///////////////////////////////////////////////////////////////////////////////////    
}

?>