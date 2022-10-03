<?php

namespace App\Http\Livewire\Admin\Professorate\Teacher\Traits;

trait TeacherRules
{
   //'user_id','representant_id','citype_id','ci','name','lastname','gender','date_birth','country_id','state_id','city_id','dir_address','phone','email','status_nacionality',

    protected $rules = [
        'teacher.ti_teacher_id' => 'required|integer',
        'teacher.ci_profesor' => 'required|integer',
        'teacher.lastname' => 'required|string|min:2',
        'teacher.name' => 'required|string|min:2',
        'teacher.gender' => 'required|string',
        'teacher.date_birth' => 'required|date',
        'teacher.dir_address' => 'required|string',
        'teacher.phone' => 'nullable|string',
        'teacher.cellphone' => 'nullable|integer',
        'teacher.email' => 'required|email',
        'teacher.whatsapp' => 'nullable|string',
        'teacher.telegram' => 'nullable|string',
        'teacher.twitter' => 'nullable|string',
        'teacher.instagram' => 'nullable|string',
        'teacher.status' => 'required|boolean',
    ];

    protected function validationAttributes()
    {
        return [
            'teacher.ti_teacher_id' => $this->list_comment['ti_teacher_id'],
            'teacher.ci_profesor' => $this->list_comment['ci_profesor'],
            'teacher.lastname' => $this->list_comment['lastname'],
            'teacher.name' => $this->list_comment['name'],
            'teacher.gender' => $this->list_comment['gender'],
            'teacher.date_birth' => $this->list_comment['date_birth'],
            'teacher.dir_address' => $this->list_comment['dir_address'],
            'teacher.phone' => $this->list_comment['phone'],
            'teacher.cellphone' => $this->list_comment['cellphone'],
            'teacher.email' => $this->list_comment['email'],
            'teacher.whatsapp' => $this->list_comment['whatsapp'],
            'teacher.telegram' => $this->list_comment['telegram'],
            'teacher.twitter' => $this->list_comment['twitter'],
            'teacher.instagram' => $this->list_comment['instagram'],
            'teacher.status' => $this->list_comment['status'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>