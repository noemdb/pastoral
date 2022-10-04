<?php
namespace App\Models\app\Teacher\Traits\Professorate;

trait ExcerciseRelations {

    public function topic()
    {
        return $this->belongsTo('App\Models\app\Teacher\Topic');
    }

}
