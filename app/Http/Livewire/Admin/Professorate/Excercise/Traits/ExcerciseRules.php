<?php

namespace App\Http\Livewire\Admin\Professorate\Excercise\Traits;
///home/nuser/code/pastoral/app/Http/Livewire/Admin/Professorate/Pevaluation/Traits/PevaluationRules.php

trait ExcerciseRules
{
    protected $rules = [
        'excercise.topic_id' => 'required|integer',
        'excercise.objetivo' => 'required|string',
        'excercise.description' => 'required|string',
        'excercise.observations' => 'nullable|string',
        'excercise.status_resolved' => 'required|boolean',
        'excercise.color' => 'nullable|string',
        'excercise.header' => 'nullable|string',
        'excercise.body' => 'nullable|string',
        'excercise.footer' => 'nullable|string',
        'excercise.attachment' => 'nullable|string',
        'excercise.status' => 'required|boolean',
    ];

    protected function validationAttributes()
    {
        return [
            'excercise.topic_id' => $this->list_comment['topic_id'],
            'excercise.objetivo' => $this->list_comment['objetivo'],
            'excercise.description' => $this->list_comment['description'],
            'excercise.observations' => $this->list_comment['observations'],
            'excercise.status_resolved' => $this->list_comment['status_resolved'],
            'excercise.color' => $this->list_comment['color'],
            'excercise.header' => $this->list_comment['header'],
            'excercise.body' => $this->list_comment['body'],
            'excercise.footer' => $this->list_comment['footer'],
            'excercise.attachment' => $this->list_comment['attachment'],
            'excercise.status' => $this->list_comment['status'],
        ];
    }
}

?>