<?php
namespace App\Models\app\Pescolar\Traits\Section;

use App\Models\app\Estudiant\Inscription;
use App\Models\app\Pescolar\Level;

trait SectionRelations {

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
    ///////////////////////////////////////////////////////////////////////////////////
}

?>
