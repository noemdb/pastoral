<?php

namespace App\Http\Livewire\Admin\Professorate\Resolution\Traits;
///home/nuser/code/pastoral/app/Http/Livewire/Admin/Professorate/Pevaluation/Traits/PevaluationRules.php

trait ResolutionRules
{
   //'excercise_id','description','observations','color','header','body','attachment','footer',

    protected $rules = [
        'resolution.excercise_id' => 'required|integer',
        'resolution.description' => 'required|string',
        'resolution.observations' => 'nullable|string',
        'resolution.color' => 'nullable|string',
        'resolution.header' => 'nullable|string',
        'resolution.body' => 'nullable|string',
        'resolution.attachment' => 'nullable|string',
        'resolution.footer' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'resolution.excercise_id' => $this->list_comment['excercise_id'],
            'resolution.description' => $this->list_comment['description'],
            'resolution.observations' => $this->list_comment['observations'],
            'resolution.color' => $this->list_comment['color'],
            'resolution.header' => $this->list_comment['header'],
            'resolution.body' => $this->list_comment['body'],
            'resolution.attachment' => $this->list_comment['attachment'],
            'resolution.footer' => $this->list_comment['footer'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>