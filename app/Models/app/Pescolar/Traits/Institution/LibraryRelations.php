<?php
namespace App\Models\app\Pescolar\Traits\Institution;
// /home/nuser/code/pastoral/app/Models/app/Pescolar/Traits/Institution/LibraryRelations.php

trait LibraryRelations {

    public function curriculum()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Curriculum');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Level');
    }
    ///////////////////////////////////////////////////////////////////////////////////    
}

?>