<?php

namespace App\Http\Livewire\Admin\Institution\Library\Traits;

trait LibraryRules
{
   // 'pastoral_id','pescolar_id','curriculum_id','lapse_id','level_id','section_id','code','code_sm','name','description','observations','autor','color','header','body','attachment','footer','status',

    protected $rules = [
        'library.pastoral_id' => 'required|integer',
        'library.pescolar_id' => 'nullable|integer',
        'library.curriculum_id' => 'nullable|integer',
        'library.lapse_id' => 'nullable|integer',
        'library.level_id' => 'nullable|integer',
        'library.section_id' => 'nullable|integer',
        'library.code' => 'required|string|min:2|max:10',
        'library.code_sm' => 'required|string|min:2|max:5',
        'library.name' => 'required|string',
        'library.description' => 'required|string',
        'library.observations' => 'nullable|string',
        'library.autor' => 'nullable|string',
        'library.status' => 'required|boolean', //
        'library.color' => 'nullable|string', //
        'library.header' => 'nullable|string',
        'library.body' => 'nullable|string',
        'library.footer' => 'nullable|string',
        'library.attachment' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'library.pastoral_id' => $this->list_comment['pastoral_id'],
            'library.pescolar_id' => $this->list_comment['pescolar_id'],
            'library.lapse_id' => $this->list_comment['lapse_id'],
            'library.curriculum_id' => $this->list_comment['curriculum_id'],
            'library.level_id' => $this->list_comment['level_id'],
            'library.section_id' => $this->list_comment['section_id'],
            'library.code' => $this->list_comment['code'],
            'library.code_sm' => $this->list_comment['code_sm'],
            'library.name' => $this->list_comment['name'],
            'library.description' => $this->list_comment['description'],
            'library.observations' => $this->list_comment['observations'],
            'library.autor' => $this->list_comment['autor'],
            'library.status' => $this->list_comment['status'],
            'library.color' => $this->list_comment['color'],
            'library.header' => $this->list_comment['header'],
            'library.body' => $this->list_comment['body'],
            'library.footer' => $this->list_comment['footer'],
            'library.attachment' => $this->list_comment['attachment'],
        ];
    }

}

?>
