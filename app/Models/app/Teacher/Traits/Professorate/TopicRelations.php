<?php
namespace App\Models\app\Teacher\Traits\Professorate;

trait TopicRelations {

    public function pevaluation()
    {
        return $this->belongsTo('App\Models\app\Teacher\Pevaluation');
    }

}
