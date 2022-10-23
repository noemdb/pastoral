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

    public $pastoral,$curriculum,$country,$state,$city;    

    public $pastoral_id,$name,$lastname,$citype_id,$ci,$curriculum_id,$gender,$laterality,$date_birth,$country_id,$state_id,$city_id,$dir_address,$christening_place,$christening_date,$phone,$extracathedra,$email,$institution,$academic_level,$academic_section,$representant_name,$representant_ci,$representant_email,$kinship,$profession,$representant_phone,$twitter,$instagram,$whatsapp,$facebook,$patology,$status_nacionality,$status_patology,$status,$description,$observations;

    public $porcentage;
    public $step,$limit_step=9;

    public $comment_enrollment,$pastorals_list,$pescolars_list,$curriculum_list,$citype_list,$gender_list,$laterality_list,$kinship_list;
    public $academic_level_list,$academic_section_list;
    public $country_list,$state_list,$city_list;

    public $status_last,$status_first,$saveInto;

    protected $listeners = [ 'confirmed' ];

    protected $rules = [
        'pastoral_id'=>'required|integer',
        'name'=>'required|string',
        'lastname'=>'required|string',
        'citype_id'=>'required|integer',
        'ci'=>'required|string',
        'curriculum_id'=>'required|integer',
        'gender'=>'required|string',
        'laterality'=>'required|string',
        'date_birth'=>'required|date',
        'country_id'=>'required|integer',
        'state_id'=>'nullable|integer',
        'city_id'=>'nullable|integer',
        'dir_address'=>'required|string',
        'christening_place'=>'required|string',
        'christening_date'=>'required|date',
        'phone'=>'nullable|string',
        'extracathedra'=>'nullable|string',
        'email'=>'required|email',
        'institution'=>'required|string',
        'academic_level'=>'required|string',
        'academic_section'=>'required|string',
        'representant_name'=>'required|string',
        'representant_ci'=>'required|numeric',
        'representant_phone'=>'nullable|string',
        'representant_email'=>'nullable|string',
        'kinship'=>'required|string',
        'profession'=>'nullable|string',        
        'twitter'=>'nullable|string',
        'instagram'=>'nullable|string',
        'whatsapp'=>'nullable|string',
        'facebook'=>'nullable|string',
        'patology'=>'nullable|string',
        'status_nacionality'=>'required|string',
        'status_patology'=>'required|string',
        'description'=>'nullable|string',
        'observations'=>'nullable|string',
    ];

    protected function validationAttributes()
    {
        return [
            'pastoral_id'=>$this->comment_enrollment['pastoral_id'],
            'name'=>$this->comment_enrollment['name'],
            'lastname'=>$this->comment_enrollment['lastname'],
            'citype_id'=>$this->comment_enrollment['citype_id'],
            'ci'=>$this->comment_enrollment['ci'],
            'curriculum_id'=>$this->comment_enrollment['curriculum_id'],
            'gender'=>$this->comment_enrollment['gender'],
            'laterality'=>$this->comment_enrollment['laterality'],
            'date_birth'=>$this->comment_enrollment['date_birth'],
            'country_id'=>$this->comment_enrollment['country_id'],
            'state_id'=>$this->comment_enrollment['state_id'],
            'city_id'=>$this->comment_enrollment['city_id'],
            'dir_address'=>$this->comment_enrollment['dir_address'],
            'christening_place'=>$this->comment_enrollment['christening_place'],
            'christening_date'=>$this->comment_enrollment['christening_date'],
            'phone'=>$this->comment_enrollment['phone'],
            'extracathedra'=>$this->comment_enrollment['extracathedra'],
            'email'=>$this->comment_enrollment['email'],
            'institution'=>$this->comment_enrollment['institution'],
            'academic_level'=>$this->comment_enrollment['academic_level'],
            'academic_section'=>$this->comment_enrollment['academic_section'],
            'representant_name'=>$this->comment_enrollment['representant_name'],
            'representant_ci'=>$this->comment_enrollment['representant_ci'],
            'representant_phone'=>$this->comment_enrollment['representant_phone'],
            'representant_email'=>$this->comment_enrollment['representant_email'],
            'kinship'=>$this->comment_enrollment['kinship'],
            'profession'=>$this->comment_enrollment['profession'],
            'twitter'=>$this->comment_enrollment['twitter'],
            'instagram'=>$this->comment_enrollment['instagram'],
            'whatsapp'=>$this->comment_enrollment['whatsapp'],
            'facebook'=>$this->comment_enrollment['facebook'],
            'patology'=>$this->comment_enrollment['patology'],
            'status_nacionality'=>$this->comment_enrollment['status_nacionality'],
            'status_patology'=>$this->comment_enrollment['status_patology'],
            'status'=>$this->comment_enrollment['status'],
            'description'=>$this->comment_enrollment['description'],
            'observations'=>$this->comment_enrollment['observations'],
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
        $this->gender_list = Enrollment::gender_list();
        $this->laterality_list = Enrollment::laterality_list();
        $this->kinship_list = Enrollment::kinship_list();
        $this->academic_level_list = Enrollment::academic_level_list();
        $this->academic_section_list = Enrollment::academic_section_list();
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

    public function updatedPastoralId()
    {
        $this->pastoral = Pastoral::findOrfail($this->pastoral_id);
        $this->pescolars_list = Pescolar::where('pastoral_id',$this->pastoral_id)->pluck('name','id')->toArray();
        $this->curriculum_list = $this->pastoral->curriculum_list()->toArray();
    }

    public function updatedCurriculumId()
    {
        $this->curriculum = Curriculum::findOrfail($this->curriculum_id);
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

    // public function loadState($id)
    public function updatedCountryId($id)
    {
        $this->country = Country::findOrFail($this->country_id);
        $this->state_list = State::where('country_id',$id)->orderBy('name')->pluck('name','id')->toArray();
    }

    // public function loadCity($id)
    public function updatedStateId()
    {
        $this->state = State::findOrFail($this->state_id);
        $this->city_list = City::where('state_id',$this->state_id)->orderBy('name')->pluck('name','id')->toArray() ;
    }

    public function confirmed()
    {
        redirect()->route('welcome');
    }

}
