<?php
namespace App\Models\app\Estudiant\Traits\Competitor; //app/Models/app/Estudiant/Traits/Competitor/EnrollmentRelations.php

trait EnrollmentRelations {

    public function pastoral()
    {
        return $this->belongsTo('App\Models\app\Pastoral');
    }

    public function curriculum()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Curriculum');
    }
    ///////////////////////////////////////////////////////////////////////////////////    
}
