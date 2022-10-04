<?php

namespace App\Http\Livewire\Admin\Professorate\Tableclass;

use App\Http\Livewire\Admin\Professorate\Tableclass\Traits\TableclassRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Teacher\Tableclass;
use App\Models\app\Teacher\Pevaluation;
use App\Models\app\Teacher\Topic;
use Illuminate\Support\Facades\DB;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use TableclassRules;

    public Tableclass $tableclass;

    public $topic_id,$tableclass_id;

    public $search = ''; //'name',teacher,cource
    public $pensums;

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $topics_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Tableclass::COLUMN_COMMENTS; 
        $this->pevaluations_list = Pevaluation::pevaluations_list()->toArray();
        $this->topics_list = Topic::topics_list()->toArray();
    }

    public function render()
    {
        $search = $this->search; 

        $tableclasses = Tableclass::select('tableclasses.*')
            ->join('topics', 'topics.id', '=', 'tableclasses.topic_id')
            ->join('pevaluations', 'pevaluations.id', '=', 'topics.pevaluation_id')
            ->join('teachers', 'teachers.id', '=', 'pevaluations.teacher_id')
            ->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
            ->join('courses', 'courses.id', '=', 'pensums.course_id')
            ;  

        $tableclasses = (!empty($search)) ? $tableclasses->orwhere(
            function($query) use ($search) {
                $query->orWhere('teachers.lastname','like', '%'.$search.'%')
                    ->orWhere('teachers.name','like','%'.$search.'%')
                    ->orWhere('courses.name','like','%'.$search.'%')
                    ->orWhere('tableclasses.description','like','%'.$search.'%')
                    ;
            }) 
            : $tableclasses ;

        $tableclasses = ($this->sortBy && $this->sortDirection) ? $tableclasses->orderBy($this->sortBy,$this->sortDirection) : $tableclasses;
        
        $tableclasses = $tableclasses->paginate($this->paginate);

        return view('livewire.admin.professorate.tableclass.list-component', [
            'tableclasses' => $tableclasses,
        ]);
    }

    public function create()
    {
        $this->tableclass = new Tableclass;
        $this->pevaluation_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $tableclass = Tableclass::find($id);
        if ($tableclass) {
            $this->tableclass = $tableclass;
            $this->tableclass_id = ($this->tableclass) ? $this->tableclass->id:null;
            $this->modeEdit = true;
            $this->modeCreate = false;
        }       
    }

    public function save()
    {
        $this->validate();
        $this->tableclass->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');
        $this->close();
    }

    public function close()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->topic_id = false;
        $this->tableclass = new Tableclass;
    }

    public function delete ($id)
    {
        $tableclass = Tableclass::find($id);
        if ($tableclass) {
            $this->tableclass = $tableclass;
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
        $this->tableclass->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
        $this->close();
    }

}
