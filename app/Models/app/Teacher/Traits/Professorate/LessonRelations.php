<?php
namespace App\Models\app\Teacher\Traits\Professorate;

trait LessonRelations {

    public function topic()
    {
        return $this->belongsTo('App\Models\app\Teacher\Topic');
    }

}
