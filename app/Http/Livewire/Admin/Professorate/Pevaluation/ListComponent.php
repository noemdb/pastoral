<?php

namespace App\Http\Livewire\Admin\Professorate\Pevaluation;

use App\Http\Livewire\Admin\Professorate\Pevaluation\Traits\PevaluationRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Teacher\Pevaluation;
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Lapse;
use App\Models\app\Pescolar\Pensum;
use App\Models\app\Pescolar\Section;
use App\Models\app\Pevaluation\TiTeacher;
use App\Models\app\Teacher;
use Illuminate\Support\Facades\DB;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use PevaluationRules;

    public Pevaluation $pevaluation;

    public $pevaluation_id,$section_id; //'teacher_id','pensum_id','lapse_id','section_id'

    public $search = ''; //'name'
    public $pensums;

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $ti_teacher_list,$genders_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Pevaluation::COLUMN_COMMENTS; 
        $this->teachers_list = Teacher::teachers_list()->toArray(); //dd($this->teachers_list);
        $this->pensums_list = Array();
        $this->lapses_list = Array();
        $this->sections_list = Section::section_list_fullname()->toArray();
    }

    public function render()
    {
        $search = $this->search; 

        $pevaluations = Pevaluation::select('pevaluations.*','')
            ->join('teachers', 'teachers.id', '=', 'pevaluations.teacher_id')
            ->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
            ->join('courses', 'courses.id', '=', 'pensums.course_id')
            ;  

        $pevaluations = (!empty($search)) ? $pevaluations->orwhere(
            function($query) use ($search) {
                $query->orWhere('teachers.lastname','like', '%'.$search.'%')
                    ->orWhere('teachers.name','like','%'.$search.'%')
                    ->orWhere('courses.name','like','%'.$search.'%')
                    ->orWhere('pevaluations.description','like','%'.$search.'%')
                    ;
            }) 
            : $pevaluations ; //dd($pevaluations);

        $pevaluations = ($this->sortBy && $this->sortDirection) ? $pevaluations->orderBy($this->sortBy,$this->sortDirection) : $pevaluations;
        
        $pevaluations = $pevaluations->paginate($this->paginate);

        return view('livewire.admin.professorate.pevaluation.list-component', [
            'pevaluations' => $pevaluations,
        ]);
    }

    public function changeSection($section_id)
    {        
        $section = Section::find($section_id);
        if ($section) {
            $this->loadPensums($section);
            $this->loadLapses($section);
        } else {
            $this->section_id =  null;
            $this->pensums = null;
            $this->pensums_list = Array();
        }
    }

    public function loadPensums($section)
    {
        $pensums = $section->pensums;
        $this->pensums_list = ($pensums->isNotEmpty()) ? $pensums->pluck('name','id')->toArray() : Array() ;
    }

    public function loadLapses($section)
    {
        $lapses = $section->lapses;
        $this->lapses_list = ($lapses->isNotEmpty()) ? $lapses->pluck('lapseName','id')->toArray() : Array() ;
    }

    public function create()
    {
        $this->pevaluation = new Pevaluation;
        $this->pevaluation_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $pevaluation = Pevaluation::find($id);
        if ($pevaluation) {
            $this->pevaluation = $pevaluation;
            $this->pevaluation_id = ($this->pevaluation) ? $this->pevaluation->id:null;
            $this->modeEdit = true;
            $this->modeCreate = false;
            $this->changeSection($this->pevaluation->section_id);
        }       
    }

    public function save()
    {
        $this->validate();
        $this->pevaluation->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');
        $this->close();
    }

    public function close()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->pevaluation_id = false;
        $this->pevaluation = new Pevaluation;
    }

    public function delete ($id)
    {
        $pevaluation = Pevaluation::find($id);
        if ($pevaluation) {
            $this->pevaluation = $pevaluation;
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
        $this->pevaluation->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
        $this->close();
    }

}
