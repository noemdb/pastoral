<?php

namespace App\Http\Livewire\Admin\Competitor\Enrollment;

use App\Http\Livewire\traits\WithSortingTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Http\Livewire\Admin\Competitor\Enrollment\Traits\EnrollmentRules;

use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Curriculum;

use App\Models\app\Estudiant;
use App\Models\app\Estudiant\Citype;
use App\Models\app\Estudiant\Enrollment;
use App\Models\app\Estudiant\Inscription;
use App\Models\app\Estudiant\Representant;
use App\Models\app\Estudiant\Tinscription;
use App\Models\app\Pastoral;
use App\Models\app\Pescolar\Lapse;
use App\Models\app\Pescolar\Level;
use App\Models\app\Pescolar\Section;
use Illuminate\Support\Facades\Validator;

use App\Models\app\Word\City;
use App\Models\app\Word\State;
use App\Models\app\Word\Country;
use Illuminate\Support\Facades\Auth;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use EnrollmentRules;

    public Enrollment $enrollment;

    public Array  $representant;
    public Array  $estudiant;
    public Array  $inscription;

    public $city,$state,$country;

    public $tinscription_id,$estudiant_id,$observations;

    public $enrollment_id;

    public $pastoral,$pastoral_id,$pescolar,$pescolar_id,$curriculum,$curriculum_id,$lapse,$lapse_id,$level,$level_id,$section,$section_id;

    public $search = ''; //'name','description'

    public $step=1;

    public $modeIndex,$modeEdit,$modeCreate,$modeIncriptions;

    public $list_comment,$list_comment_inscription,$list_comment_estudiant,$list_comment_representant,$tinscription_list;

    public $status_last,$status_first,$saveInto;

    public $curricula_list,$lapses_list,$pastorals_list,$pescolars_list,$curriculum_list,$levels_list,$section_list,$citype_list,$genders_list;

    public $country_list,$state_list,$city_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeIndex = true;
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->modeIncriptions = false;
        $this->step = 1;

        $this->list_comment = Enrollment::COLUMN_COMMENTS;
        $this->list_comment_inscription = Inscription::COLUMN_COMMENTS;

        $this->citype_list = Citype::citype_list()->toArray();
        $this->list_comment_estudiant = Estudiant::COLUMN_COMMENTS;
        $this->list_comment_representant = Representant::COLUMN_COMMENTS;

        $this->pastorals_list = Pastoral::pastorals_list()->toArray();
        $this->tinscription_list = Tinscription::tinscription_list()->toArray();
        $this->genders_list = ['Masculino'=>'Masculino', 'Femenino'=>'Femenino'];
    }

    public function render()
    {
        $search = $this->search;

        $enrollments = Enrollment::select('enrollments.*');

        $enrollments = (!empty($search)) ? $enrollments->orwhere(
            function($query) use ($search) {
                $query->orWhere('description','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%');
            })
            : $enrollments ;

        $enrollments = ($this->sortBy && $this->sortDirection) ? $enrollments->orderBy($this->sortBy,$this->sortDirection) : $enrollments;

        $enrollments = $enrollments->paginate($this->paginate);

        return view('livewire.admin.competitor.enrollment.list-component', [
            'enrollments' => $enrollments,
        ]);
    }

    public function create()
    {
        $this->enrollment = new Enrollment;
        $this->enrollment_id = null;

        $this->modeIndex = false;
        $this->modeCreate = true;
        $this->modeEdit = false;
        $this->modeIncriptions = false;
    }

    public function edit($id)
    {
        $this->enrollment = Enrollment::find($id);
        $this->enrollment_id = ($this->enrollment) ? $this->enrollment->id:null;
        $this->modeIndex = false;
        $this->modeEdit = true;
        $this->modeIncriptions = false;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->enrollment->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->enrollment = new Enrollment;
        $this->reset(['enrollment_id']);
    }

    public function close()
    {
        $this->enrollment_id = false;
        $this->modeIndex = true;
        $this->modeEdit = false;
        $this->modeCreate = false;
        $this->modeIncriptions = false;
    }

    public function closeEditMode()
    {
        $this->close();
    }

    public function closeCreateMode()
    {
        /////////////////////////////////////
        $this->close();
    }

    public function delete ($id)
    {
        $enrollment = Enrollment::find($id);
        if ($enrollment) {
            $this->enrollment = $enrollment;
            $this->alert('warning', 'Estas seguro de realizar esta acción?', [
                'showConfirmButton' => true,
                'showCancelButton' => true,
                'timer' => null,
                'confirmButtonText' => 'Eliminar',
                'onConfirmed' => 'remove'
            ]);
        }
    }

    public function remove ()
    {
        $this->enrollment->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

    //////////////////////INI updated////////////////////////////////

        public function updatedPastoralId()
        {
            $this->pastoral = Pastoral::find($this->pastoral_id);
            $this->pescolars_list = ($this->pastoral) ? $this->pastoral->pescolars_full_list()->toArray() : Array() ;
            $this->step = ($this->pastoral) ? 2 : 1 ;
        }

        public function updatedPescolarId()
        {
            $this->pescolar = Pescolar::find($this->pescolar_id);
            $this->curricula_list = ($this->pescolar) ? $this->pescolar->curricula_full_list()->toArray() : Array() ;
            $this->step = ($this->pescolar) ? 3 : 2 ;
        }

        public function updatedCurriculumId()
        {
            $this->curriculum = Curriculum::find($this->curriculum_id);
            $this->lapses_list = ($this->curriculum) ? $this->curriculum->lapses_list()->toArray() : Array() ;
            $this->step = ($this->curriculum) ? 4 : 3 ;
        }

        public function updatedLapseId()
        {
            $this->lapse = Lapse::find($this->lapse_id);
            $this->levels_list = ($this->lapse) ? $this->lapse->levels_list()->toArray() : Array() ;
            $this->step = ($this->lapse) ? 5 : 4 ;
        }

        public function updatedLevelId()
        {
            $this->level = Level::find($this->level_id);
            $this->section_list = ($this->level) ? $this->level->sections_list()->toArray() : Array() ;
            $this->step = ($this->level) ? 6 : 5 ;
        }

    //////////////////////FIN updated////////////////////////////////

    public function inscription($id)
    {
        $enrollment = Enrollment::find($id);
        if ($enrollment) {
            $this->enrollment = $enrollment;
            $this->enrollment_id = $enrollment->id;

            $this->representant = [
                'citype_id' =>$this->enrollment->citype_id,
                'ci' =>$this->enrollment->representant_ci,
                'name'=>$this->enrollment->representant_name,
                'phone'=>$this->enrollment->representant_phone,
                'email'=>$this->enrollment->representant_email,
                'whatsapp'=>$this->enrollment->whatsapp,
                'twitter'=>$this->enrollment->twitter,
                'instagram'=>$this->enrollment->instagram,
            ];

            $this->estudiant = [
                'citype_id' =>$this->enrollment->citype_id,
                'ci' =>$this->enrollment->ci,
                'name'=>$this->enrollment->name,
                'lastname'=>$this->enrollment->lastname,
                'gender'=>$this->enrollment->gender,
                'date_birth'=>$this->enrollment->date_birth->format('Y-m-d'),
                'country_id'=>$this->enrollment->country_id,
                'state_id'=>$this->enrollment->state_id,
                'city_id'=>$this->enrollment->city_id,
                'dir_address'=>$this->enrollment->dir_address,
                'phone'=>$this->enrollment->phone,
                'email'=>$this->enrollment->email,
                'status_nacionality'=>$this->enrollment->status_nacionality,
            ];

            $this->modeIncriptions = true;
            $this->modeEdit = true;
            $this->modeCreate = false;
            $this->modeIndex = false;
        }
    }

    public function saveInscription()
    {
        //Representant
        $arr_representant = [
            'name' => $this->representant['name'],
            'email' => $this->representant['email'],
            'ci' => $this->representant['ci'],
            'citype_id' => $this->representant['citype_id'],
            'phone' => $this->representant['phone'],
        ];
        $validator = Validator::make($arr_representant ,
            [
                'citype_id' => 'required|integer',
                'ci' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|string',
            ])->validate();

        //Estudiant
        $arr_estudiant = [
            'user_id' => Auth::id(),
            'citype_id' => $this->estudiant['citype_id'],
            'ci' => $this->estudiant['ci'],
            'name' => $this->estudiant['name'],
            'lastname' => $this->estudiant['lastname'],
            'gender' => $this->estudiant['gender'],
            'date_birth' => $this->estudiant['date_birth'],
            'country_id' => $this->estudiant['country_id'],
            'state_id' => $this->estudiant['state_id'],
            'city_id' => $this->estudiant['city_id'],
            'dir_address' => $this->estudiant['dir_address'],
            'phone' => $this->estudiant['phone'],
            'email' => $this->estudiant['email'],
            'status_nacionality' => $this->estudiant['status_nacionality'],
        ]; //dd($arr);
        $validator = Validator::make( $arr_estudiant,
            [
                'user_id' => 'required|integer',
                'citype_id' => 'required|integer',
                'ci' => 'required|string',
                'name' => 'required|string',
                'lastname' => 'required|string',
                'gender' => 'required|string',
                'date_birth' => 'required|date',
                'country_id' => 'required|integer',
                'state_id' => 'required|integer',
                'city_id' => 'required|integer',
                'dir_address' => 'nullable|string',
                'email' => 'nullable|string',
                'status_nacionality' => 'required|boolean',
            ],
            [
                'lastname.required' => 'El campo apellido es requerido',
            ]
        )->validate();

         //dd($estudiant);

        $arr_inscription = [
            'tinscription_id' => $this->tinscription_id,
            'section_id' => $this->section_id,
            'observations' => $this->observations,
        ];
        $validator = Validator::make($arr_inscription,
            [
                'tinscription_id' => 'required|integer',
                'section_id' => 'required|integer',
                'observations' => 'nullable|string',
            ])->validate();

        $representant = Representant::create($arr_representant);

        $arr_estudiant['representant_id'] = $representant->id; //dd($arr_estudiant);

        $estudiant = Estudiant::create($arr_estudiant);

        $arr_inscription['estudiant_id'] = $estudiant->id; //dd($arr_inscription);

        $inscription = Inscription::create($arr_inscription); 

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->modeIncriptions = false;

        // $this->enrollment = new Enrollment;
        // $this->enrollment_id = null;
        // $this->representant = null;
        // $this->estudiant = null;
    }

}
