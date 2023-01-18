<?php
namespace App\Models\app\Pescolar\Traits\Course;

use App\Models\app\Pescolar\Curriculum;
use App\Models\app\Pescolar\Pensum;

trait CourseRelations {

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
    public function pensums()
    {
        return $this->hasMany(Pensum::class);
    }
    ///////////////////////////////////////////////////////////////////////////////////
}

