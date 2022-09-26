<?php

namespace App\Http\Livewire\Admin\Institution\Curriculum\Traits;
// home/nuser/code/pastoral/app/Http/Livewire/Admin/Institution/Curriculum/Traits
//

trait CurriculumRules
{
   //'pescolar_id','code','name','order','capacity','description','observations','status_build_promotion','title','profile','status','color','header','body','footer',

    protected $rules = [
        'curriculum.pescolar_id' => 'required|integer',
        'curriculum.name' => 'required|string',
        'curriculum.code' => 'required|string|min:2|max:5',
        'curriculum.order' => 'required|integer',
        'curriculum.capacity' => 'required|integer',
        'curriculum.description' => 'required|string',
        'curriculum.observations' => 'nullable|string',
        'curriculum.status_build_promotion' => 'required|boolean',
        'curriculum.title' => 'required|string', //
        'curriculum.profile' => 'required|string', //
        'curriculum.status' => 'required|boolean',
        'curriculum.color' => 'nullable|string',
        'curriculum.header' => 'nullable|string',
        'curriculum.body' => 'nullable|string', //
        'curriculum.footer' => 'nullable|string', //
    ];

    protected function validationAttributes()
    {
        return [
            'curriculum.pescolar_id' => $this->list_comment['pescolar_id'],
            'curriculum.name' => $this->list_comment['name'],
            'curriculum.code' => $this->list_comment['code'],
            'curriculum.order' => $this->list_comment['order'],
            'curriculum.capacity' => $this->list_comment['capacity'],
            'curriculum.description' => $this->list_comment['description'],
            'curriculum.observations' => $this->list_comment['observations'],
            'curriculum.status_build_promotion' => $this->list_comment['status_build_promotion'],
            'curriculum.title' => $this->list_comment['title'],
            'curriculum.profile' => $this->list_comment['profile'],
            'curriculum.status' => $this->list_comment['status'],
            'curriculum.color' => $this->list_comment['color'],
            'curriculum.header' => $this->list_comment['header'],
            'curriculum.body' => $this->list_comment['body'],
            'curriculum.footer' => $this->list_comment['footer'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>