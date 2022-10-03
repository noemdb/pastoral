<?php

namespace App\Http\Livewire\Admin\Professorate\Evaluation\Traits;
///home/nuser/code/pastoral/app/Http/Livewire/Admin/Professorate/Pevaluation/Traits/PevaluationRules.php

trait EvaluationRules
{
    protected $rules = [
        'evaluation.pevaluation_id' => 'required|integer',
        'evaluation.objetivo' => 'required|string',
        'evaluation.description' => 'required|string',
        'evaluation.observations' => 'required|string',
        'evaluation.date' => 'required|date',
        'evaluation.color' => 'nullable|string',
        'evaluation.header' => 'nullable|string',
        'evaluation.body' => 'nullable|string',
        'evaluation.footer' => 'nullable|string',
        'evaluation.attachment' => 'nullable|string',
        'evaluation.status' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'evaluation.pevaluation_id' => $this->list_comment['pevaluation_id'],
            'evaluation.objetivo' => $this->list_comment['objetivo'],
            'evaluation.description' => $this->list_comment['description'],
            'evaluation.observations' => $this->list_comment['observations'],
            'evaluation.date' => $this->list_comment['date'],
            'evaluation.color' => $this->list_comment['color'],
            'evaluation.header' => $this->list_comment['header'],
            'evaluation.body' => $this->list_comment['body'],
            'evaluation.footer' => $this->list_comment['footer'],
            'evaluation.attachment' => $this->list_comment['attachment'],
            'evaluation.status' => $this->list_comment['status'],
        ];
    }
    
}

?>