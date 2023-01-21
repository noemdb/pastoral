<?php
namespace App\Models\app\Estudiant\Traits\Competitor;

use App\Models\app\Estudiant;
use App\Models\app\Estudiant\Tinscription;
use App\Models\app\Pescolar\Section;


///home/nuser/code/pastoral/app/Models/app/Estudiant/Traits/Competitor/InscriptionRelations.php

trait InscriptionRelations {

    public function tinscription()
    {
        return $this->belongsTo(Tinscription::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function estudiant()
    {
        return $this->belongsTo(Estudiant::class);
    }


    ///////////////////////////////////////////////////////////////////////////////////    
}

