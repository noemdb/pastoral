<?php
namespace App\Models\app\Pescolar\Traits\Section;

use App\Models\app\Estudiant\Inscription;
use App\Models\app\Pescolar\Level;
use App\Models\app\Teacher\Pevaluation;

trait SectionRelations {

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    public function pevaluations()
    {
        return $this->hasMany(Pevaluation::class);
    }
    ///////////////////////////////////////////////////////////////////////////////////
}

?>
