<?php

namespace App\Http\Livewire\Admin\Institution\Level\Traits;

trait LevelRules
{
   //'curriculum_id','code','code_sm','name','description','observations','color','header','body','footer','status',

    protected $rules = [
        'level.curriculum_id' => 'required|integer',
        'level.code' => 'required|string|min:2|max:10',
        'level.code_sm' => 'required|string|min:2|max:5',
        'level.name' => 'required|string',
        'level.description' => 'required|string',
        'level.observations' => 'nullable|string',
        'level.status' => 'required|boolean', //
        'level.color' => 'nullable|string', //
        'level.header' => 'nullable|string',
        'level.body' => 'nullable|string',
        'level.footer' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'level.curriculum_id' => $this->list_comment['curriculum_id'],
            'level.code' => $this->list_comment['code'],
            'level.code_sm' => $this->list_comment['code_sm'],
            'level.name' => $this->list_comment['name'],
            'level.description' => $this->list_comment['description'],
            'level.observations' => $this->list_comment['observations'],
            'level.status' => $this->list_comment['status'],
            'level.color' => $this->list_comment['color'],
            'level.header' => $this->list_comment['header'],
            'level.body' => $this->list_comment['body'],
            'level.footer' => $this->list_comment['footer'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>