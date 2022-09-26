<?php

namespace App\Http\Livewire\Admin\Institution\Course\Traits;

trait CourseRules
{
   //'curriculum_id','code','code_sm','name','description','observations','color','header','body','footer','status',

    protected $rules = [
        'course.curriculum_id' => 'required|integer',
        'course.code' => 'required|string|min:2|max:10',
        'course.code_sm' => 'required|string|min:2|max:5',
        'course.name' => 'required|string',
        'course.description' => 'required|string',
        'course.observations' => 'nullable|string',
        'course.status' => 'required|boolean', //
        'course.color' => 'nullable|string', //
        'course.header' => 'nullable|string',
        'course.body' => 'nullable|string',
        'course.footer' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'course.curriculum_id' => $this->list_comment['curriculum_id'],
            'course.code' => $this->list_comment['code'],
            'course.code_sm' => $this->list_comment['code_sm'],
            'course.name' => $this->list_comment['name'],
            'course.description' => $this->list_comment['description'],
            'course.observations' => $this->list_comment['observations'],
            'course.status' => $this->list_comment['status'],
            'course.color' => $this->list_comment['color'],
            'course.header' => $this->list_comment['header'],
            'course.body' => $this->list_comment['body'],
            'course.footer' => $this->list_comment['footer'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>