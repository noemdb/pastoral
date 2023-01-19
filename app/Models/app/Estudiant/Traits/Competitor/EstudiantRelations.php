<?php
namespace App\Models\app\Estudiant\Traits\Competitor; //app/Models/app/Estudiant/Traits/Competitor/EnrollmentRelations.php

use App\Models\app\Estudiant\Citype;
use App\Models\app\Estudiant\Inscription;
use App\Models\app\Estudiant\Representant;
use App\Models\User;

trait EstudiantRelations {

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function representant()
    {
        return $this->belongsTo(Representant::class);
    }

    public function citype()
    {
        return $this->belongsTo(Citype::class);
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }


}
