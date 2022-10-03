<?php

namespace App\Http\Livewire\Admin\Professorate\Teacher;

use App\Http\Livewire\Admin\Professorate\Teacher\Traits\TeacherRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Teacher;
use App\Models\app\Pescolar;
use App\Models\app\Teacher\TiTeacher;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use TeacherRules;

    public Teacher $teacher;

    public $teacher_id;

    public $search = ''; //'name'

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $ti_teacher_list,$genders_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Teacher::COLUMN_COMMENTS; 
        $this->ti_teacher_list = TiTeacher::ti_teacher_list()->toArray();
        $this->genders_list = ['Masculino'=>'Masculino', 'Femenino'=>'Femenino'];
    }

    public function render()
    {
        $search = $this->search; 

        $teachers = Teacher::select('teachers.*');  

        $teachers = (!empty($search)) ? $teachers->orwhere(
            function($query) use ($search) {
                $query->orWhere('lastname','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%')
                    ->orWhere('ci','like','%'.$search.'%')
                    ;
            }) 
            : $teachers ; //dd($teachers);

        $teachers = ($this->sortBy && $this->sortDirection) ? $teachers->orderBy($this->sortBy,$this->sortDirection) : $teachers;
        
        $teachers = $teachers->paginate($this->paginate);

        return view('livewire.admin.professorate.teacher.list-component', [
            'teachers' => $teachers,
        ]);
    }

    public function create()
    {
        $this->teacher = new Teacher;
        $this->teacher_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->teacher = Teacher::find($id);
        $this->teacher_id = ($this->teacher) ? $this->teacher->id:null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->teacher->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->teacher = new Teacher;
        $this->reset(['teacher_id']);
    }

    public function closeEditMode()
    {
        $this->teacher_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $teacher = Teacher::find($id);
        if ($teacher) {
            $this->teacher = $teacher;
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
        $this->teacher->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
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

}
