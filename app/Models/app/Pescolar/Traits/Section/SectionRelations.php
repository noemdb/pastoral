<?php
namespace App\Models\app\Pescolar\Traits\Section;

trait SectionRelations {

    public function level()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Level');
    }
    ///////////////////////////////////////////////////////////////////////////////////    
}

?>