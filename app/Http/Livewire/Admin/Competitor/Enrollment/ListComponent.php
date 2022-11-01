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
use App\Models\app\Pescolar\Level;
use App\Models\app\Pescolar\Section;
use Illuminate\Support\Facades\Validator;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use EnrollmentRules;

    public Enrollment $enrollment;

    public Representant $representant;
    public Estudiant $estudiant;
    public Inscription $inscription;

    public $tinscription_id,$estudiant_id,$observations;

    public $enrollment_id;

    public $pastoral,$pastoral_id,$pescolar,$pescolar_id,$currilum,$curriculum_id,$level,$level_id,$section,$section_id;

    public $search = ''; //'name','description'

    public $step=1;

    public $modeEdit,$modeCreate,$modeIncriptions;

    public $list_comment,$list_comment_inscription,$list_comment_estudiant;

    public $status_last,$status_first,$saveInto;

    public $curricula_list,$pastorals_list,$pescolars_list,$curriculum_list,$levels_list,$section_list,$citype_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
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

        $this->representant = new Representant;
        $this->estudiant = new Estudiant;
        $this->inscription = new Inscription;
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

        //dd($enrollments);

        return view('livewire.admin.competitor.enrollment.list-component', [
            'enrollments' => $enrollments,
        ]); //views/livewire/admin/competitor/enrollment/list-component.blade.php
    }

    public function create()
    {
        $this->enrollment = new Enrollment;
        $this->enrollment_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
        $this->modeIncriptions = false;
    }

    public function edit($id)
    {
        $this->enrollment = Enrollment::find($id);
        $this->enrollment_id = ($this->enrollment) ? $this->enrollment->id:null;
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
        $this->modeEdit = false;
        $this->modeCreate = false;
        $this->modeIncriptions = false;
    }

    public function closeEditMode()
    {
        $this->enrollment_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
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
            $this->levels_list = ($this->curriculum) ? $this->curriculum->levels_list()->toArray() : Array() ;
            $this->step = ($this->curriculum) ? 4 : 3 ;
        }

        public function updatedLevelId()
        {
            $this->level = Level::find($this->level_id); 
            $this->section_list = ($this->level) ? $this->level->sections_list()->toArray() : Array() ;
            $this->step = ($this->level) ? 5 : 4 ;
        }

    //////////////////////FIN updated////////////////////////////////

    public function inscription($id)
    {
        $enrollment = Enrollment::find($id);
        if ($enrollment) {
            $this->enrollment = $enrollment;
            $this->enrollment_id = $enrollment->id;

            $this->representant->fill($this->enrollment->toArray()); //dd($this->representant);

            $this->estudiant->fill($this->enrollment->toArray()); //dd($this->estudiant);            

            $this->modeIncriptions = true;
            $this->modeEdit = true;
            $this->modeCreate = false;
        }
    }

    public function saveInscription()
    {

        $validatedData = Validator::make(
            ['email' => $this->email],
            ['email' => 'required|email'],
            ['required' => 'The :attribute field is required'],
        )->validate();
       
        //'tinscription_id','section_id','estudiant_id','observations'

        $validatedData = $this->validate([
                'tinscription_id' => 'required|integer',
                'section_id' => 'required|integer',
                'observations' => 'nullable|string',
            ],
            [
                'required.tinscription_id' => 'El campo :attribute no puede ser nulo.',
            ],
            [
                'tinscription_id' => 'Tipo de Inscripción',
                'section_id' => 'Grupo',
                'observations' => 'Observaciones',
            ]
        );

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->enrollment = new Enrollment;
        $this->reset(['enrollment_id']);
    }

}
