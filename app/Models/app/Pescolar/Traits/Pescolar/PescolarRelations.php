<?php
namespace App\Models\app\Pescolar\Traits\Pescolar;
////home/nuser/code/pastoral/app/Models/app/Pescolar/Traits/Pescolar/PescolarRelations.php

trait PescolarRelations {

    public function pastoral()
    {
        return $this->belongsTo('App\Models\app\Pastoral');
    }
    ///////////////////////////////////////////////////////////////////////////////////    
}
