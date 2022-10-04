<?php
namespace App\Models\app\Teacher\Traits\Professorate;

trait TableclassRelations {

    public function topic()
    {
        return $this->belongsTo('App\Models\app\Teacher\Topic');
    }

}
