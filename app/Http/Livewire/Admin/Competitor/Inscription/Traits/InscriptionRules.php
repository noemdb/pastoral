<?php

namespace App\Http\Livewire\Admin\Competitor\Inscription\Traits;

trait InscriptionRules
{
   //'curriculum_id','code','code_sm','name','description','observations','color','header','body','footer','status',

    protected $rules = [
        'inscription.tinscription_id' => 'required|integer',
        'inscription.section_id' => 'required|integer',
        'inscription.estudiant_id' => 'required|integer',
        'inscription.observations' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'inscription.tinscription_id' => $this->list_comment['tinscription_id'],
            'inscription.section_id' => $this->list_comment['section_id'],
            'inscription.estudiant_id' => $this->list_comment['estudiant_id'],
            'inscription.observations' => $this->list_comment['observations'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>