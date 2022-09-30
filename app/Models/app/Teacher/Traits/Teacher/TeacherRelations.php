<?php
namespace App\Models\app\Teacher\Traits\Teacher;

trait TeacherRelations {

    public function ti_teacher()
    {
        return $this->belongsTo('App\Models\app\Teacher\TiTeacher');
    }


}
