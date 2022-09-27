<?php

namespace App\Http\Livewire\Admin\Competitor\Enrollment\Traits; //app/Http/Livewire/Admin/Competitor/Enrollment/Traits/EnrollmentRules.php

trait EnrollmentRules
{
    
   /*  pastoral_id,representant_ci,representant_name,citype_id,ci,name,lastname,fullname,curriculum_id,gender,
   laterality,date_birth,city_id,state_id,country_id,dir_address,phone,email,twitter,whatsapp,facebook,patology,
   status_nacionality,status_patology,status,description,observations,*/

    protected $rules = [
        'pastoral_id' => 'required|integer',
        'representant_ci' => 'required|string|min:2|max:10',
        'representant_name' => 'required|string|min:2|max:5',
        'citype_id' => 'required|string',
        'ci' => 'required|string',
        'name' => 'nullable|string',
        'lastname' => 'required|boolean', //
        'fullname' => 'nullable|string', //
        'curriculum_id' => 'nullable|string',
        'gender' => 'nullable|string',
        'laterality' => 'nullable|string',
        'date_birth' => 'nullable|string',
        'city_id' => 'nullable|string',
        'state_id' => 'nullable|string',
        'country_id' => 'nullable|string',
        'dir_address' => 'nullable|string',
        'phone' => 'nullable|string',
        'email' => 'nullable|string',
        'twitter' => 'nullable|string',
        'whatsapp' => 'nullable|string',
        'facebook' => 'nullable|string',
        'patology' => 'nullable|string',
        'status_nacionality' => 'nullable|string',
        'status_patology' => 'nullable|string',
        'status' => 'nullable|string',
        'description' => 'nullable|string',
        'observations' => 'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'pastoral_id' => $this->list_comment['pastoral_id'],
            'representant_ci' => $this->list_comment['representant_ci'],
            'representant_name' => $this->list_comment['representant_name'],
            'citype_id' => $this->list_comment['citype_id'],
            'ci' => $this->list_comment['ci'],
            'name' => $this->list_comment['name'],
            'lastname' => $this->list_comment['lastname'],
            'fullname' => $this->list_comment['fullname'],
            'curriculum_id' => $this->list_comment['curriculum_id'],
            'gender' => $this->list_comment['gender'],
            'laterality' => $this->list_comment['laterality'],
            'date_birth' => $this->list_comment['date_birth'],
            'city_id' => $this->list_comment['city_id'],
            'state_id' => $this->list_comment['state_id'],
            'country_id' => $this->list_comment['country_id'],
            'dir_address' => $this->list_comment['dir_address'],
            'phone' => $this->list_comment['phone'],
            'email' => $this->list_comment['email'],
            'twitter' => $this->list_comment['twitter'],
            'whatsapp' => $this->list_comment['whatsapp'],
            'facebook' => $this->list_comment['facebook'],
            'patology' => $this->list_comment['patology'],
            'status_nacionality' => $this->list_comment['status_nacionality'],
            'status_patology' => $this->list_comment['status_patology'],
            'status' => $this->list_comment['status'],
            'description' => $this->list_comment['description'],
            'observations' => $this->list_comment['observations'],
        ];
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
}

?>