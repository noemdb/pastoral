<?php

namespace App\Http\Livewire\Admin\Professorate\Lesson\Traits;
///home/nuser/code/pastoral/app/Http/Livewire/Admin/Professorate/Pevaluation/Traits/PevaluationRules.php

trait LessonRules
{
    protected $rules = [
        'lesson.topic_id' => 'required|integer',
        'lesson.duration' => 'required|integer',
        'lesson.description' => 'required|string',
        'lesson.observations' => 'required|string',
        'lesson.color' => 'nullable|string',
        'lesson.header' => 'nullable|string',
        'lesson.body' => 'nullable|string',
        'lesson.attachment' => 'nullable|string',
        'lesson.footer' => 'nullable|string',
        'lesson.status' => 'boolean|string',
    ];

    protected function validationAttributes()
    {
        return [
            'lesson.topic_id' => $this->list_comment['topic_id'],
            'lesson.description' => $this->list_comment['description'],
            'lesson.observations' => $this->list_comment['observations'],
            'lesson.color' => $this->list_comment['color'],
            'lesson.header' => $this->list_comment['header'],
            'lesson.body' => $this->list_comment['body'],
            'lesson.attachment' => $this->list_comment['attachment'],
            'lesson.footer' => $this->list_comment['footer'],
            'lesson.status' => $this->list_comment['status'],
        ];
    }
}

?>