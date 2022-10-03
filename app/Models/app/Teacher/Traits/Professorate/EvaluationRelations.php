<?php
namespace App\Models\app\Teacher\Traits\Professorate;

trait EvaluationRelations {

    public function pevaluation()
    {
        return $this->belongsTo('App\Models\app\Teacher\Pevaluation');
    }

}
