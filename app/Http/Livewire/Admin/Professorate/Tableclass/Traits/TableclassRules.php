<?php

namespace App\Http\Livewire\Admin\Professorate\Tableclass\Traits;
///home/nuser/code/pastoral/app/Http/Livewire/Admin/Professorate/Pevaluation/Traits/PevaluationRules.php

trait TableclassRules
{
    protected $rules = [
        'tableclass.user_id' => 'nullable|integer',
        'tableclass.topic_id' => 'required|integer',
        'tableclass.title' => 'required|string',
        'tableclass.messege' => 'required|string',
        'tableclass.footer' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'tableclass.user_id' => $this->list_comment['user_id'],
            'tableclass.topic_id' => $this->list_comment['topic_id'],
            'tableclass.title' => $this->list_comment['title'],
            'tableclass.messege' => $this->list_comment['messege'],
            'tableclass.footer' => $this->list_comment['footer'],            
        ];
    }
}

?>