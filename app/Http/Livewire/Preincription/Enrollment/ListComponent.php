<?php

namespace App\Http\Livewire\Preincription\Enrollment;

use App\Models\app\Estudiant\Enrollment;
use App\Models\app\Pastoral;
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Curriculum;
use App\Models\app\Estudiant\Citype;
use App\Http\Requests\Enrollment\StoreEnrollmentRequest;

use Livewire\Component;

class ListComponent extends Component
{
    public $pastoral,$curriculum;

    public $pastoral_id,$representant_ci,$representant_name,$citype_id,$laterality,$twitter,$whatsapp,$facebook,$ci,$patology,$lastname,$name,$curriculum_id;
    public $gender,$date_birth,$city_birth,$town_hall_birth,$state_birth,$country_birth,$dir_address,$phone;
    public $email,$observations,$status,$status_nacionality,$status_patology,$description;

    public $porcentage;
    public $step,$limit_step=7;

    public $comment_enrollment,$pastorals_list,$pescolars_list,$curriculum_list,$citype_list,$gender_list,$laterality_list;

    public $status_last,$status_first;

    public function mount()
    {
        $this->step = 1;
        $this->status_first = true;
        $this->status_last = false;
        $this->porcentage = 0;

        $this->pastoral = null;
        $this->curriculum = null;

        $this->comment_enrollment = Enrollment::COLUMN_COMMENTS;
        $this->pastorals_list = Pastoral::all()->pluck('name','id')->toArray();
        $this->citype_list = Citype::all()->pluck('name','id')->toArray();
        $this->gender_list = ['Femenino'=>'Femenino','Masculino'=>'Masculino'];
        $this->laterality_list = ['Izquierdo(a)'=>'Izquierdo(a)','Derecho(a)'=>'Derecho(a)','Ambidextro(a)'=>'Ambidextro(a)'];
    }

    public function home()
    {
        $this->step = 1;
        $this->status();
    }

    public function next()
    {
        $this->step++;
        $this->step = ($this->step > $this->limit_step) ? 1 : $this->step ;
        $this->status();        
        // $this->emit('updated');
    }

    public function status()
    {
        $this->status_first = ($this->step == 1) ? true : false ;
        $this->status_last = ($this->step == $this->limit_step) ? true : false ;
    }

    public function back()
    {
        $this->step--;
        $this->step = ($this->step < 1) ? $this->limit_step : $this->step ;
        $this->status();
    }
    public function loadInstitution($id)
    {
        $this->pastoral = Pastoral::find($id);
        if ($this->pastoral) {
            $this->pastoral_id = $this->pastoral->id;
            $this->pescolars_list = Pescolar::where('pastoral_id',$this->pastoral_id)->pluck('name','id')->toArray();
            $this->curriculum_list = $this->pastoral->curriculum_list()->toArray();
        }
    }

    public function loadCurriculum($id)
    {
        $this->curriculum = Curriculum::find($id);
    }

    public function render()
    {
        $this->porcentage = round(100 * $this->step / $this->limit_step);
        return view('livewire.preincription.enrollment.list-component');
    }

    public function save()
   {   
        $validatedData = $this->validate(

             [
                'pastoral_id'=>'required',
                'curriculum_id'=>'required',
                'name'=>'required',
                'representant_ci'=>'required',
                'representant_name'=>'required',
                'lastname'=>'required',
                'citype_id'=>'required',
                'ci'=>'required',
                'gender'=>'required',
                'date_birth'=>'required|date',
                'city_birth'=>'required',
                'town_hall_birth'=>'required',
                'state_birth'=>'required',
                'dir_address'=>'required',
                'phone'=>'required',
                'email'=>'required|email',
                'status_nacionality'=>'required',
                'status_patology'=>'required',
            ],

            [],

            [
                'pastoral_id' => $this->comment_enrollment['pastoral_id'],
                'curriculum_id' => $this->comment_enrollment['curriculum_id'],
                'representant_ci'=>$this->comment_enrollment['representant_ci'],
                'representant_name'=>$this->comment_enrollment['representant_name'],
                'name' =>$this->comment_enrollment['name'],
                'lastname' =>$this->comment_enrollment['lastname'],
                'citype_id' =>$this->comment_enrollment['citype_id'],
                'ci' =>$this->comment_enrollment['ci'],
                'gender' =>$this->comment_enrollment['gender'],
                'date_birth' =>$this->comment_enrollment['date_birth'],
                'city_birth' =>$this->comment_enrollment['city_birth'],
                'town_hall_birth' =>$this->comment_enrollment['town_hall_birth'],
                'state_birth' =>$this->comment_enrollment['state_birth'],
                'dir_address' =>$this->comment_enrollment['dir_address'],
                'phone' =>$this->comment_enrollment['phone'],
                'email' =>$this->comment_enrollment['email'],
                'status_nacionality' =>$this->comment_enrollment['status_nacionality'],
                'status_patology' =>$this->comment_enrollment['status_patology'],
            ]

        );     
        Enrollment::create($validatedData);
        $this->inputClean();
        $this->mount();
        session()->flash('message', 'Su preinscripción fué registrada satisfactoriamente.');
        return redirect()->route('welcome');
    }

    public function inputClean()
    {
        $this->pastoral_id = null;
        $this->representant_ci = null;
        $this->representant_name = null;
        $this->citype_id = null;
        $this->ci= null;
        $this->name= null;
        $this->lastname= null;
        $this->fullname= null;
        $this->curriculum_id= null;
        $this->gender= null;
        $this->laterality= null;
        $this->date_birth= null;
        $this->city_birth= null;
        $this->town_hall_birth= null;
        $this->state_birth= null;
        $this->country_birth= null;
        $this->dir_address= null;
        $this->phone= null;
        $this->email= null;
        $this->twitter= null;
        $this->whatsapp= null;
        $this->facebook= null;
        $this->patology= null;
        $this->status_nacionality= null;
        $this->status_patology= null;
        $this->status= null;
        $this->description= null;
        $this->observations= null;        
    }

}
