<?php
namespace App\Models\app\Estudiant\Traits\Competitor; //app/Models/app/Estudiant/Traits/Competitor/EnrollmentRelations.php

use App\Models\app\Estudiant;

trait RepresentantRelations {

    // public function curriculum()
    // {
    //     return $this->belongsTo(Curriculum::class);
    // }
    public function estudiants()
    {
        return $this->hasMany(Estudiant::class);
    }
    ///////////////////////////////////////////////////////////////////////////////////
}
