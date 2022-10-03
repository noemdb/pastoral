<?php

namespace App\Http\Livewire\Admin\Professorate\Pevaluation\Traits;
///home/nuser/code/pastoral/app/Http/Livewire/Admin/Professorate/Pevaluation/Traits/PevaluationRules.php

trait PevaluationRules
{
   //'teacher_id','pensum_id','lapse_id','section_id','objetivo','description','observations','color','header','body','footer','attachment','status',

    protected $rules = [
        'pevaluation.teacher_id' => 'required|integer',
        'pevaluation.pensum_id' => 'required|integer',
        'pevaluation.lapse_id' => 'required|integer',
        'pevaluation.section_id' => 'required|integer',
        'pevaluation.objetivo' => 'required|string',
        'pevaluation.description' => 'required|string',
        'pevaluation.observations' => 'nullable|string',
        'pevaluation.color' => 'nullable|string',
        'pevaluation.header' => 'nullable|string',
        'pevaluation.body' => 'required|string',
        'pevaluation.footer' => 'nullable|string',
        'pevaluation.attachment' => 'nullable|string',
        'pevaluation.status' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'pevaluation.teacher_id' => $this->list_comment['teacher_id'],
            'pevaluation.pensum_id' => $this->list_comment['pensum_id'],
            'pevaluation.lapse_id' => $this->list_comment['lapse_id'],
            'pevaluation.section_id' => $this->list_comment['section_id'],
            'pevaluation.objetivo' => $this->list_comment['objetivo'],
            'pevaluation.description' => $this->list_comment['description'],
            'pevaluation.observations' => $this->list_comment['observations'],
            'pevaluation.color' => $this->list_comment['color'],
            'pevaluation.header' => $this->list_comment['header'],
            'pevaluation.body' => $this->list_comment['body'],
            'pevaluation.footer' => $this->list_comment['footer'],
            'pevaluation.attachment' => $this->list_comment['attachment'],
            'pevaluation.status' => $this->list_comment['status'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>