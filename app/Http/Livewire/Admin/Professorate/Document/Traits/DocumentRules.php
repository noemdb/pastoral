<?php

namespace App\Http\Livewire\Admin\Professorate\Document\Traits;
///home/nuser/code/pastoral/app/Http/Livewire/Admin/Professorate/Pevaluation/Traits/PevaluationRules.php

trait DocumentRules
{
    protected $rules = [
        'document.user_id' => 'nullable|integer',
        'document.publication_id' => 'required|integer',
        'document.description' => 'required|string',
        'document.observations' => 'nullable|string',
        'document.color' => 'nullable|string',
        'document.header' => 'nullable|string',
        'document.body' => 'nullable|string',
        'document.footer' => 'nullable|string',
        'document.attachment' => 'nullable|string',
        'document.status' => 'required|boolean',
    ];

    protected function validationAttributes()
    {
        return [
            'document.user_id' => $this->list_comment['user_id'],
            'document.publication_id' => $this->list_comment['publication_id'],
            'document.description' => $this->list_comment['description'],
            'document.observations' => $this->list_comment['observations'],
            'document.color' => $this->list_comment['color'],
            'document.header' => $this->list_comment['header'],
            'document.body' => $this->list_comment['body'],
            'document.footer' => $this->list_comment['footer'],
            'document.attachment' => $this->list_comment['attachment'],
            'document.status' => $this->list_comment['status'],
        ];
    }
}

?>