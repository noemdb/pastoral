<?php
namespace App\Models\app\Teacher\Traits\Professorate;

trait TeacherRelations {

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function ti_teacher()
    {
        return $this->belongsTo('App\Models\app\Teacher\TiTeacher');
    }


}
