<?php

namespace App\Http\Livewire\Admin\Institution\Library\Traits;

trait LibraryRules
{
   // 'curriculum_id','level_id','code','code_sm','name','description','observations','autor','color','header','body','attachment','footer','status',

    protected $rules = [
        'library.curriculum_id' => 'required|integer',
        'library.level_id' => 'nullable|integer',
        'library.code' => 'required|string|min:2|max:10',
        'library.code_sm' => 'required|string|min:2|max:5',
        'library.name' => 'required|string',
        'library.description' => 'required|string',
        'library.observations' => 'nullable|string',
        'library.status' => 'required|boolean', //
        'library.color' => 'nullable|string', //
        'library.header' => 'nullable|string',
        'library.body' => 'nullable|string',
        'library.footer' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'library.curriculum_id' => $this->list_comment['curriculum_id'],
            'library.level_id' => $this->list_comment['level_id'],
            'library.code' => $this->list_comment['code'],
            'library.code_sm' => $this->list_comment['code_sm'],
            'library.name' => $this->list_comment['name'],
            'library.description' => $this->list_comment['description'],
            'library.observations' => $this->list_comment['observations'],
            'library.status' => $this->list_comment['status'],
            'library.color' => $this->list_comment['color'],
            'library.header' => $this->list_comment['header'],
            'library.body' => $this->list_comment['body'],
            'library.footer' => $this->list_comment['footer'],
        ];
    }

}

?>