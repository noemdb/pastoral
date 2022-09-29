<?php
namespace App\Models\app\Estudiant\Traits\Competitor; //app/Models/app/Estudiant/Traits/Competitor/EnrollmentRelations.php

trait EstudiantRelations {

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function representant()
    {
        return $this->belongsTo('App\Models\app\Estudiant\Representant');
    }

    public function citype()
    {
        return $this->belongsTo('App\Models\app\Estudiant\Citype');
    }


}
