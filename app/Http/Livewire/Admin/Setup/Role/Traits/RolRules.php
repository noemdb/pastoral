<?php

namespace App\Http\Livewire\Admin\Setup\Role\Traits; ///home/nuser/code/pastoral/app/Http/Livewire/Admin/Setup/User/Traits/UserRules.php

trait RolRules
{
    protected $rules = [
        'rol.user_id' => 'required|integer',
        'rol.pastoral_id' => 'required|integer',
        'rol.area' => 'required|string',
        'rol.rol' => 'required|string',
        'rol.description' => 'nullable|integer',
        'rol.observation' => 'nullable|string',
        'rol.finicial' => 'nullable|date',
        'rol.ffinal' => 'nullable|date',
    ];

    protected function validationAttributes()
    {
        return [
            'rol.user_id' => $this->list_comment['name'],
            'rol.pastoral_id' => $this->list_comment['email'],
            'rol.area' => $this->list_comment['email_verified_at'],
            'rol.rol' => $this->list_comment['password'],
            'rol.description' => $this->list_comment['current_team_id'],
            'rol.observation' => $this->list_comment['profile_photo_path'],
            'rol.finicial' => $this->list_comment['status'],
            'rol.ffinal' => $this->list_comment['last_login_at'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>