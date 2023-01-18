<?php
namespace App\Models\app\Pescolar\Traits\Section;

trait SectionRelations {

    public function level()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Level');
    }

    public function inscriptions()
    {
        return $this->hasMany('App\Models\app\Estudiant\Inscription');
    }
    ///////////////////////////////////////////////////////////////////////////////////    
}

?>