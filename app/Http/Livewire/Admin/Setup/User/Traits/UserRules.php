<?php

namespace App\Http\Livewire\Admin\Setup\User\Traits; ///home/nuser/code/pastoral/app/Http/Livewire/Admin/Setup/User/Traits/UserRules.php

trait UserRules
{
   //'user_id','representant_id','citype_id','ci','name','lastname','gender','date_birth','country_id','state_id','city_id','dir_address','phone','email','status_nacionality',

    protected $rules = [
        'user.name' => 'required|string',
        'user.email' => 'required|email',
        'user.email_verified_at' => 'nullable',
        'user.password' => 'nullable',
        'user.current_team_id' => 'required|integer',
        'user.profile_photo_path' => 'nullable|string',
        'user.status' => 'required|boolean',
        'user.work_id' => 'nullable|string',
        'user.card_id' => 'nullable|string',
        'user.biometric_id' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'user.name' => $this->list_comment['name'],
            'user.email' => $this->list_comment['email'],
            'user.email_verified_at' => $this->list_comment['email_verified_at'],
            'user.password' => $this->list_comment['password'],
            'user.current_team_id' => $this->list_comment['current_team_id'],
            'user.profile_photo_path' => $this->list_comment['profile_photo_path'],
            'user.status' => $this->list_comment['status'],
            'user.last_login_at' => $this->list_comment['last_login_at'],
            'user.last_loginout_at' => $this->list_comment['last_loginout_at'],
            'user.last_login_ip' => $this->list_comment['last_login_ip'],
            'user.work_id' => $this->list_comment['work_id'],
            'user.card_id' => $this->list_comment['card_id'],
            'user.biometric_id' => $this->list_comment['biometric_id'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>