<?php

namespace App\Http\Livewire\Admin\Institution\Lapse\Traits;

trait LapseRules
{
   //'pescolar_id','code','name','order','capacity','description','observations','status_build_promotion','title','profile','status','color','header','body','footer',

    protected $rules = [
        'lapse.curriculum_id' => 'required|integer',
        'lapse.code' => 'required|string|min:2|max:10',
        'lapse.code_sm' => 'required|string|min:2|max:5',
        'lapse.name' => 'required|string',
        'lapse.description' => 'required|string',
        'lapse.observations' => 'nullable|string',
        'lapse.finicial' => 'required|date',
        'lapse.ffinal' => 'required|date',
        'lapse.status' => 'required|boolean', //
        'lapse.color' => 'nullable|string', //
        'lapse.header' => 'nullable|string',
        'lapse.body' => 'nullable|string',
        'lapse.footer' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'lapse.curriculum_id' => $this->list_comment['curriculum_id'],
            'lapse.code' => $this->list_comment['code'],
            'lapse.code_sm' => $this->list_comment['code_sm'],
            'lapse.name' => $this->list_comment['name'],
            'lapse.description' => $this->list_comment['description'],
            'lapse.observations' => $this->list_comment['observations'],
            'lapse.finicial' => $this->list_comment['finicial'],
            'lapse.ffinal' => $this->list_comment['ffinal'],
            'lapse.status' => $this->list_comment['status'],
            'lapse.color' => $this->list_comment['color'],
            'lapse.header' => $this->list_comment['header'],
            'lapse.body' => $this->list_comment['body'],
            'lapse.footer' => $this->list_comment['footer'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>