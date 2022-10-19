<?php

namespace App\Http\Livewire\Admin\Setup\Role\Traits; ///home/nuser/code/pastoral/app/Http/Livewire/Admin/Setup/User/Traits/UserRules.php

trait RolRules
{
    protected $rules = [
        // 'rol.user_id' => 'required|integer',
        'rol.pastoral_id' => 'required|integer',
        'rol.area' => 'required|string',
        'rol.rol' => 'required|string',
        'rol.description' => 'nullable|string',
        'rol.observation' => 'nullable|string',
        'rol.finicial' => 'required|date',
        'rol.ffinal' => 'required|date',
    ];

    protected function validationAttributes()
    {
        return [
            // 'rol.user_id' => $this->list_comment['user_id'],
            'rol.pastoral_id' => $this->list_comment['pastoral_id'],
            'rol.area' => $this->list_comment['area'],
            'rol.rol' => $this->list_comment['rol'],
            'rol.description' => $this->list_comment['description'],
            'rol.observation' => $this->list_comment['observation'],
            'rol.finicial' => $this->list_comment['finicial'],
            'rol.ffinal' => $this->list_comment['ffinal'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>