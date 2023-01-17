<?php
namespace App\Models\app\Pescolar\Traits\Institution;

trait LibraryRelations {

    public function pastoral()
    {
        return $this->belongsTo('App\Models\app\Pastoral');
    }

    public function pescolar()
    {
        return $this->belongsTo('App\Models\app\Pescolar');
    }

    public function curriculum()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Curriculum');
    }

    public function lapse()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Lapse');
    }


    public function level()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Level');
    }
    ///////////////////////////////////////////////////////////////////////////////////
}

?>
