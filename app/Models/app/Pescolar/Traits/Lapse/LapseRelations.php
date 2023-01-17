<?php
namespace App\Models\app\Pescolar\Traits\Lapse;

use App\Models\app\Pescolar\Charisma;
use App\Models\app\Pescolar\Curriculum;
use App\Models\app\Pescolar\Level;

trait LapseRelations {

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }

    public function charisma()
    {
        return $this->belongsTo(Charisma::class);
    }

    public function levels()
    {
        return $this->hasMany(Level::class);
    }

}

