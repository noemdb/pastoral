<?php
namespace App\Models\app\Pescolar\Traits\Pescolar;

use App\Models\app\Pescolar\Curriculum;

////home/nuser/code/pastoral/app/Models/app/Pescolar/Traits/Pescolar/PescolarRelations.php

trait PescolarRelations {

    public function pastoral()
    {
        return $this->belongsTo('App\Models\app\Pastoral');
    }
    public function curricula()
    {
        return $this->hasMany(Curriculum::class);
    }
    ///////////////////////////////////////////////////////////////////////////////////
}
