<?php

namespace App\Http\Livewire\Admin\Competitor\Representant\Traits;

trait RepresentantRules
{
   //'user_id','citype_id','ci','name','phone','email','whatsapp','telegram','twitter','instagram','status_adviders',

    protected $rules = [
        'representant.user_id' => 'nullable|integer',
        'representant.citype_id' => 'required|integer',
        'representant.ci' => 'required|integer',
        'representant.name' => 'required|string|min:5|max:100',
        'representant.phone' => 'required|string',
        'representant.email' => 'required|string',
        'representant.whatsapp' => 'required|string',
        'representant.telegram' => 'required|string',
        'representant.twitter' => 'required|string',
        'representant.instagram' => 'required|string',
        'representant.status_adviders' => 'required|integer',
    ];

    protected function validationAttributes()
    {
        return [
            'representant.user_id' => $this->list_comment['user_id'],
            'representant.citype_id' => $this->list_comment['citype_id'],
            'representant.ci' => $this->list_comment['ci'],
            'representant.name' => $this->list_comment['name'],
            'representant.phone' => $this->list_comment['phone'],
            'representant.email' => $this->list_comment['email'],
            'representant.whatsapp' => $this->list_comment['whatsapp'],
            'representant.telegram' => $this->list_comment['telegram'],
            'representant.twitter' => $this->list_comment['twitter'],
            'representant.instagram' => $this->list_comment['instagram'],
            'representant.status_adviders' => $this->list_comment['status_adviders'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>