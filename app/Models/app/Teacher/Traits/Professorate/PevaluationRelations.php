<?php
namespace App\Models\app\Teacher\Traits\Professorate;

trait PevaluationRelations {

    public function teacher()
    {
        return $this->belongsTo('App\Models\app\Teacher'); ///home/nuser/code/pastoral/app/Models/app/Teacher.php
    }

    public function pensum()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Pensum');
    }

    public function lapse()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Lapse');
    }

    public function section()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Section');
    }

}
