<?php

namespace App\Http\Livewire\Admin\Professorate\Publication\Traits;
///home/nuser/code/pastoral/app/Http/Livewire/Admin/Professorate/Pevaluation/Traits/PevaluationRules.php

trait PublicationRules
{
   //'teacher_id','pensum_id','lapse_id','section_id','objetivo','description','observations','color','header','body','footer','attachment','status',

    protected $rules = [
        'publication.teacher_id' => 'required|integer',
        'publication.user_id' => 'nullable|integer',
        'publication.description' => 'required|string',
        'publication.observations' => 'nullable|string',
        'publication.color' => 'nullable|string',
        'publication.header' => 'nullable|string',
        'publication.body' => 'nullable|string',
        'publication.attachment' => 'nullable|string',
        'publication.footer' => 'nullable|string',
        'publication.status' => 'required|boolean',
    ];

    protected function validationAttributes()
    {
        return [
            'publication.teacher_id' => $this->list_comment['teacher_id'],
            'publication.user_id' => $this->list_comment['user_id'],
            'publication.description' => $this->list_comment['description'],
            'publication.observations' => $this->list_comment['observations'],
            'publication.color' => $this->list_comment['color'],
            'publication.header' => $this->list_comment['header'],
            'publication.body' => $this->list_comment['body'],
            'publication.attachment' => $this->list_comment['attachment'],
            'publication.footer' => $this->list_comment['footer'],
            'publication.status' => $this->list_comment['status'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>