<?php
namespace App\Models\app\Teacher\Traits\Professorate;

trait ResolutionRelations {

    public function excercise()
    {
        return $this->belongsTo('App\Models\app\Teacher\Excercise');
    }

}
