<?php
namespace App\Models\app\Teacher\Traits\Professorate;

trait PublicationRelations {

    public function teacher()
    {
        return $this->belongsTo('App\Models\app\Teacher'); ///home/nuser/code/pastoral/app/Models/app/Teacher.php
    }

}
