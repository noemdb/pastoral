<?php
namespace App\Models\app\Pescolar\Traits\Pensum;

use App\Models\app\Teacher\Pevaluation;

trait PensumRelations {

    public function level()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Level');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Course');
    }

    public function pevaluations()
    {
        return $this->hasMany(Pevaluation::class);
    }
    ///////////////////////////////////////////////////////////////////////////////////
}

?>
