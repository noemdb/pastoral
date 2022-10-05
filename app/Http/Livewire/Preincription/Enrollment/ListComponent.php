<?php

namespace App\Http\Livewire\Preincription\Enrollment;

use App\Models\app\Estudiant\Enrollment;
use App\Models\app\Pastoral;
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Curriculum;
use App\Models\app\Estudiant\Citype;
// use App\Http\Requests\Enrollment\StoreEnrollmentRequest;
use App\Models\app\Word\Country;
use App\Models\app\Word\State;
use App\Models\app\Word\City;

use Jantinnerezo\LivewireAlert\LivewireAlert;

use Livewire\Component;

class ListComponent extends Component
{

    use LivewireAlert;

    public $pastoral,$curriculum,$country,$state,$city,$country_id,$state_id,$city_id;

    public $pastoral_id,$representant_ci,$representant_name,$citype_id,$laterality,$twitter,$whatsapp,$facebook,$ci,$patology,$lastname,$name,$curriculum_id;
    public $gender,$date_birth,$dir_address,$phone;
    public $email,$observations,$status,$status_nacionality,$status_patology,$description;

    public $porcentage;
    public $step,$limit_step=7;

    public $comment_enrollment,$pastorals_list,$pescolars_list,$curriculum_list,$citype_list,$gender_list,$laterality_list;
    public $country_list,$state_list,$city_list;

    public $status_last,$status_first,$saveInto;

    protected $listeners = [ 'confirmed' ];

    protected $rules = [
                    'pastoral_id'=>'required',
                    'curriculum_id'=>'required',
                    'name'=>'required',
                    'representant_ci'=>'required|numeric',
                    'representant_name'=>'required',
                    'lastname'=>'required',
                    'citype_id'=>'required',
                    'ci'=>'required|unique:enrollments|numeric',
                    'gender'=>'required',
                    'date_birth'=>'required|date',
                    'city_id'=>'required',
                    'state_id'=>'required',
                    'country_id'=>'required',
                    'dir_address'=>'required',
                    'phone'=>'required',
                    'email'=>'required|email',
                    'status_nacionality'=>'required',
                    'status_patology'=>'required',
    ];

    protected function validationAttributes()
    {
        return [
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
                'city_id' =>$this->comment_enrollment['city_id'],
                'state_id' =>$this->comment_enrollment['state_id'],
                'country_id' =>$this->comment_enrollment['country_id'],
                'dir_address' =>$this->comment_enrollment['dir_address'],
                'phone' =>$this->comment_enrollment['phone'],
                'email' =>$this->comment_enrollment['email'],
                'status_nacionality' =>$this->comment_enrollment['status_nacionality'],
                'status_patology' =>$this->comment_enrollment['status_patology'],
        ];
    }

    public function mount()
    {
        $this->saveInto = false;
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
        $this->country_list = Country::all()->pluck('name','id')->toArray();
        $this->state_list = Array();
        $this->city_list = Array();
        $this->country_id = null;
        $this->state_id = null;
        $this->city_id = null;
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
            //dd($this->pescolars_list,$this->curriculum_list,$id);
        }
    }

    public function loadCurriculum($id)
    {
        $this->curriculum = Curriculum::find($id); //dd($this->curriculum,$id);
    }

    public function render()
    {
        $this->porcentage = round(100 * $this->step / $this->limit_step);
        return view('livewire.preincription.enrollment.list-component');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {   
        $this->home();
        $this->saveInto = true;
        $validatedData = $this->validate();     
        Enrollment::create($validatedData);
        $this->reset();
        $this->mount();        
        $this->alert('success', 'Su preinscripción fué registrada satisfactoriamente!',
            [
                'toast' => false,
                'position' => 'center',
                'showConfirmButton' => true,
                'timer'=>null,
                'onConfirmed' => 'confirmed' 
            ]
        );   
    }

    public function inputClean()
    {
        $this->reset();
    }

    public function loadState($id)
    {
        $this->country = Country::find($id);
        $this->country_id = ($this->country) ? $this->country->id : null ;
        $this->state_list = ($this->country) ? State::where('country_id',$id)->orderBy('name')->pluck('name','id')->toArray() : null ;
    }

    public function loadCity($id)
    {
        $this->state = State::find($id);
        $this->state_id = ($this->state) ? $this->state->id : null ;
        $this->city_list = ($this->state) ? City::where('state_id',$id)->orderBy('name')->pluck('name','id')->toArray() : null ;
    }

    public function confirmed()
    {
        redirect()->route('welcome');
    }

}
