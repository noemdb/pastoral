<?php

namespace App\Http\Livewire\Admin\Professorate\Evaluation;

use App\Http\Livewire\Admin\Professorate\Evaluation\Traits\EvaluationRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Teacher\Evaluation;
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Lapse;
use App\Models\app\Pescolar\Pensum;
use App\Models\app\Pescolar\Section;
use App\Models\app\Teacher;
use App\Models\app\Teacher\Pevaluation;
use Illuminate\Support\Facades\DB;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use EvaluationRules;

    public Evaluation $evaluation;

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
        $this->list_comment = Evaluation::COLUMN_COMMENTS; 
        $this->pevaluations_list = Pevaluation::pevaluations_list()->toArray(); //dd($this->teachers_list);
        $this->teachers_list = Teacher::teachers_list()->toArray(); //dd($this->teachers_list);
        $this->pensums_list = Array();
        $this->lapses_list = Array();
        $this->sections_list = Section::section_list_fullname()->toArray();
    }

    public function render()
    {
        $search = $this->search; 

        $evaluations = Evaluation::select('evaluations.*','')
            ->join('pevaluations', 'pevaluations.id', '=', 'evaluations.pevaluation_id')
            ->join('teachers', 'teachers.id', '=', 'pevaluations.teacher_id')
            ->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
            ->join('courses', 'courses.id', '=', 'pensums.course_id')
            ;  

        $evaluations = (!empty($search)) ? $evaluations->orwhere(
            function($query) use ($search) {
                $query->orWhere('teachers.lastname','like', '%'.$search.'%')
                    ->orWhere('teachers.name','like','%'.$search.'%')
                    ->orWhere('courses.name','like','%'.$search.'%')
                    ->orWhere('evaluations.description','like','%'.$search.'%')
                    ;
            }) 
            : $evaluations ; //dd($evaluations);

        $evaluations = ($this->sortBy && $this->sortDirection) ? $evaluations->orderBy($this->sortBy,$this->sortDirection) : $evaluations;
        
        $evaluations = $evaluations->paginate($this->paginate);

        return view('livewire.admin.professorate.evaluation.list-component', [
            'evaluations' => $evaluations,
        ]);
    }

    public function create()
    {
        $this->evaluation = new Evaluation;
        $this->pevaluation_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $evaluation = Evaluation::find($id);
        if ($evaluation) {
            $this->evaluation = $evaluation;
            $this->pevaluation_id = ($this->evaluation) ? $this->evaluation->id:null;
            $this->modeEdit = true;
            $this->modeCreate = false;
        }       
    }

    public function save()
    {
        $this->validate();
        $this->evaluation->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');
        $this->close();
    }

    public function close()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->pevaluation_id = false;
        $this->evaluation = new Evaluation;
    }

    public function delete ($id)
    {
        $evaluation = Evaluation::find($id);
        if ($evaluation) {
            $this->evaluation = $evaluation;
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
        $this->evaluation->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
        $this->close();
    }

}
