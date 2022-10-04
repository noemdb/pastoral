<?php
namespace App\Models\app\Teacher\Traits\Professorate;

trait DocumentRelations {

    public function publication()
    {
        return $this->belongsTo('App\Models\app\Teacher\Publication');
    }

}
