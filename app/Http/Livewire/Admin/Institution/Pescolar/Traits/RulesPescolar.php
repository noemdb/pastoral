<?php

namespace App\Http\Livewire\Admin\Institution\Pescolar\Traits;
///home/nuser/code/pastoral/app/Http/Livewire/Admin/Institution/Pescolar/Traits/PescolarRules.php

trait RulesPescolar
{
   //'pastoral_id','name','code','finicial','ffinal','description','observations','color','header','body','footer',

    protected $rules = [
        'pescolar.pastoral_id' => 'required|integer',
        'pescolar.name' => 'required|string',
        'pescolar.code' => 'required|string|min:2|max:15',
        'pescolar.finicial' => 'required|date', //
        'pescolar.ffinal' => 'required|date', //
        'pescolar.description' => 'required|string',
        'pescolar.observations' => 'nullable|string',
        'pescolar.color' => 'nullable|string', //
        'pescolar.header' => 'nullable|string',
        'pescolar.body' => 'nullable|string', //
        'pescolar.footer' => 'nullable|string', //
    ];

    protected function validationAttributes()
    {
        return [
            'pescolar.pastoral_id' => $this->list_comment['pastoral_id'],
            'pescolar.name' => $this->list_comment['name'],
            'pescolar.code' => $this->list_comment['code'],
            'pescolar.finicial' => $this->list_comment['finicial'],
            'pescolar.ffinal' => $this->list_comment['finicial'],
            'pescolar.description' => $this->list_comment['description'],
            'pescolar.observations' => $this->list_comment['observations'],
            'pescolar.color' => $this->list_comment['color'],
            'pescolar.header' => $this->list_comment['header'],
            'pescolar.body' => $this->list_comment['body'],
            'pescolar.footer' => $this->list_comment['footer'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>
