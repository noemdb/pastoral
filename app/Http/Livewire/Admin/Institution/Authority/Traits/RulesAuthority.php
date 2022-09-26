<?php

namespace App\Http\Livewire\Admin\Institution\Authority\Traits; //app/Http/Livewire/Admin/Institution/Authority/Traits/Rules.php

trait RulesAuthority
{
   //'tauthority_id','pescolar_id','pastoral_id','name','lastname','ci','position','profile_professional','photo','finicial','ffinal',

    protected $rules = [
        'authority.tauthority_id' => 'required|integer',
        'authority.pescolar_id' => 'required|integer',
        'authority.pastoral_id' => 'required|integer',
        'authority.name' => 'required|string', //
        'authority.lastname' => 'required|string', //
        'authority.ci' => 'required|digits_between:5,10',
        'authority.position' => 'required', //
        'authority.profile_professional' => 'required', //
        'authority.photo' => 'nullable', //
        'authority.finicial' => 'required|date', //
        'authority.ffinal' => 'required|date',
    ];

    protected function validationAttributes()
    {
        return [
            'authority.tauthority_id' => $this->list_comment['tauthority_id'],
            'authority.pescolar_id' => $this->list_comment['pescolar_id'],
            'authority.pastoral_id' => $this->list_comment['pastoral_id'],
            'authority.name' => $this->list_comment['name'],
            'authority.lastname' => $this->list_comment['lastname'],
            'authority.ci' => $this->list_comment['ci'],
            'authority.position' => $this->list_comment['position'],
            'authority.profile_professional' => $this->list_comment['profile_professional'],
            'authority.photo' => $this->list_comment['photo'],
            'authority.finicial' => $this->list_comment['finicial'],
            'authority.ffinal' => $this->list_comment['ffinal']
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>