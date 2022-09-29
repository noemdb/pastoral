<?php
namespace App\Models\app\Estudiant\Traits\Competitor;

///home/nuser/code/pastoral/app/Models/app/Estudiant/Traits/Competitor/InscriptionRelations.php

trait InscriptionRelations {

    public function tinscription()
    {
        return $this->belongsTo('App\Models\app\Estudiant\Tinscription');
    }

    public function section()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Section');
    }

    public function estudiant()
    {
        return $this->belongsTo('App\Models\app\Estudiant');
    }
    ///////////////////////////////////////////////////////////////////////////////////    
}

