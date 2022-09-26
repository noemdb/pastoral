<?php

namespace App\Http\Livewire\Admin\Institution\Section\Traits;

trait SectionRules
{
   //'level_id','code','code_sm','name','description','observations','color','header','body','footer','status',

    protected $rules = [
        'section.level_id' => 'required|integer',
        'section.code' => 'required|string|min:2|max:10',
        'section.code_sm' => 'required|string|min:2|max:5',
        'section.name' => 'required|string',
        'section.description' => 'required|string',
        'section.observations' => 'nullable|string',
        'section.status' => 'required|boolean', //
        'section.color' => 'nullable|string', //
        'section.header' => 'nullable|string',
        'section.body' => 'nullable|string',
        'section.footer' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'section.level_id' => $this->list_comment['level_id'],
            'section.code' => $this->list_comment['code'],
            'section.code_sm' => $this->list_comment['code_sm'],
            'section.name' => $this->list_comment['name'],
            'section.description' => $this->list_comment['description'],
            'section.observations' => $this->list_comment['observations'],
            'section.status' => $this->list_comment['status'],
            'section.color' => $this->list_comment['color'],
            'section.header' => $this->list_comment['header'],
            'section.body' => $this->list_comment['body'],
            'section.footer' => $this->list_comment['footer'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>