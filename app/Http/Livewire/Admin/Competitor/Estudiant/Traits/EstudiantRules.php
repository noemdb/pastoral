<?php

namespace App\Http\Livewire\Admin\Competitor\Estudiant\Traits;

trait EstudiantRules
{
   //'user_id','representant_id','citype_id','ci','name','lastname','gender','date_birth','country_id','state_id','city_id','dir_address','phone','email','status_nacionality',

    protected $rules = [
        'estudiant.user_id' => 'nullable|integer',
        'estudiant.representant_id' => 'required|integer',
        'estudiant.citype_id' => 'required|integer',
        'estudiant.ci' => 'required|string|min:2|max:10',
        'estudiant.name' => 'required|string',
        'estudiant.lastname' => 'required|string',
        'estudiant.gender' => 'required|string',
        'estudiant.date_birth' => 'required|date',
        'estudiant.country_id' => 'required|integer',
        'estudiant.state_id' => 'required|integer',
        'estudiant.city_id' => 'required|integer',
        'estudiant.dir_address' => 'required|string',
        'estudiant.phone' => 'required|string',
        'estudiant.email' => 'required|string',
        'estudiant.status_nacionality' => 'required|string',
    ];

    protected function validationAttributes()
    {
        return [
            'estudiant.user_id' => $this->list_comment['user_id'],
            'estudiant.representant_id' => $this->list_comment['representant_id'],
            'estudiant.citype_id' => $this->list_comment['citype_id'],
            'estudiant.ci' => $this->list_comment['ci'],
            'estudiant.name' => $this->list_comment['name'],
            'estudiant.lastname' => $this->list_comment['lastname'],
            'estudiant.gender' => $this->list_comment['gender'],
            'estudiant.date_birth' => $this->list_comment['date_birth'],
            'estudiant.country_id' => $this->list_comment['country_id'],
            'estudiant.state_id' => $this->list_comment['state_id'],
            'estudiant.city_id' => $this->list_comment['city_id'],
            'estudiant.dir_address' => $this->list_comment['dir_address'],
            'estudiant.phone' => $this->list_comment['phone'],
            'estudiant.email' => $this->list_comment['email'],
            'estudiant.status_nacionality' => $this->list_comment['status_nacionality'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>