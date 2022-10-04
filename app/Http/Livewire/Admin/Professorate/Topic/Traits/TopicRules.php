<?php

namespace App\Http\Livewire\Admin\Professorate\Topic\Traits;
///home/nuser/code/pastoral/app/Http/Livewire/Admin/Professorate/Pevaluation/Traits/PevaluationRules.php

trait TopicRules
{
   //'pevaluation_id','description','objetivo','observations','color','header','body','footer','attachment','status'

    protected $rules = [
        'topic.pevaluation_id' => 'required|integer',
        'topic.objetivo' => 'required|string',
        'topic.description' => 'required|string',
        'topic.observations' => 'required|string',
        'topic.color' => 'nullable|string',
        'topic.header' => 'nullable|string',
        'topic.body' => 'nullable|string',
        'topic.footer' => 'nullable|string',
        'topic.attachment' => 'nullable|string',
        'topic.status' => 'required|boolean',
    ];

    protected function validationAttributes()
    {
        return [
            'topic.pevaluation_id' => $this->list_comment['pevaluation_id'],
            'topic.objetivo' => $this->list_comment['objetivo'],
            'topic.description' => $this->list_comment['description'],
            'topic.observations' => $this->list_comment['observations'],
            'topic.color' => $this->list_comment['color'],
            'topic.header' => $this->list_comment['header'],
            'topic.body' => $this->list_comment['body'],
            'topic.footer' => $this->list_comment['footer'],
            'topic.attachment' => $this->list_comment['attachment'],
            'topic.status' => $this->list_comment['status'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>