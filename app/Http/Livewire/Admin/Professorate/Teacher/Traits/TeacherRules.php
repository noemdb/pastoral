<?php

namespace App\Http\Livewire\Admin\Professorate\Teacher\Traits;

trait TeacherRules
{
   //'user_id','representant_id','citype_id','ci','name','lastname','gender','date_birth','country_id','state_id','city_id','dir_address','phone','email','status_nacionality',

    protected $rules = [
        'teachers.ti_teacher_id' => 'required|integer',
        'teachers.ci_profesor' => 'required|string',
        'teachers.lastname' => 'required|string',
        'teachers.name' => 'required|string|min:2',
        'teachers.gender' => 'required|string',
        'teachers.date_birth' => 'required|string',
        'teachers.city_birth' => 'nullable|string',
        'teachers.dir_address' => 'required|date',
        'teachers.phone' => 'required|integer',
        'teachers.cellphone' => 'nullable|integer',
        'teachers.email' => 'required|integer',
        'teachers.status' => 'required|boolean'
    ];

    protected function validationAttributes()
    {
        return [
            'teachers.user_id' => $this->list_comment['user_id'],
            'teachers.representant_id' => $this->list_comment['representant_id'],
            'teachers.citype_id' => $this->list_comment['citype_id'],
            'teachers.ci' => $this->list_comment['ci'],
            'teachers.name' => $this->list_comment['name'],
            'teachers.lastname' => $this->list_comment['lastname'],
            'teachers.gender' => $this->list_comment['gender'],
            'teachers.date_birth' => $this->list_comment['date_birth'],
            'teachers.country_id' => $this->list_comment['country_id'],
            'teachers.state_id' => $this->list_comment['state_id'],
            'teachers.city_id' => $this->list_comment['city_id'],
            'teachers.dir_address' => $this->list_comment['dir_address'],
            'teachers.phone' => $this->list_comment['phone']
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>