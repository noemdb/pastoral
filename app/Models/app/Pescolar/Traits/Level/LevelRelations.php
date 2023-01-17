<?php
namespace App\Models\app\Pescolar\Traits\Level;

use App\Models\app\Pescolar\Lapse;
use App\Models\app\Pescolar\Section;

trait LevelRelations {

    public function lapse()
    {
        return $this->belongsTo(Lapse::class);
    }
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    ///////////////////////////////////////////////////////////////////////////////////
}

?>
