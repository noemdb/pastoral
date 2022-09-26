<?php
namespace App\Models\app\Pescolar\Traits\Course;

trait CourseRelations {

    public function curriculum()
    {
        return $this->belongsTo('App\Models\app\Pescolar\Curriculum');
    }
    ///////////////////////////////////////////////////////////////////////////////////    
}

