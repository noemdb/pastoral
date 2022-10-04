<?php

namespace App\Http\Livewire\Admin\Professorate\Excercise;

use App\Http\Livewire\Admin\Professorate\Excercise\Traits\ExcerciseRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Teacher\Excercise;
use App\Models\app\Teacher\Pevaluation;
use App\Models\app\Teacher\Topic;
use Illuminate\Support\Facades\DB;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use ExcerciseRules;

    public Excercise $excercise;

    public $topic_id,$excercise_id;

    public $search = ''; //'name',teacher,cource
    public $pensums;

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $lessons_list,$topics_list,$pevaluations_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Excercise::COLUMN_COMMENTS; 
        $this->pevaluations_list = Pevaluation::pevaluations_list()->toArray();
        $this->topics_list = Topic::topics_list()->toArray();
    }

    public function render()
    {
        $search = $this->search; 

        $excercises = Excercise::select('excercises.*')
            ->join('topics', 'topics.id', '=', 'excercises.topic_id')
            ->join('pevaluations', 'pevaluations.id', '=', 'topics.pevaluation_id')
            ->join('teachers', 'teachers.id', '=', 'pevaluations.teacher_id')
            ->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
            ->join('courses', 'courses.id', '=', 'pensums.course_id')
            ;  

        $excercises = (!empty($search)) ? $excercises->orwhere(
            function($query) use ($search) {
                $query->orWhere('teachers.lastname','like', '%'.$search.'%')
                    ->orWhere('teachers.name','like','%'.$search.'%')
                    ->orWhere('courses.name','like','%'.$search.'%')
                    ->orWhere('excercises.description','like','%'.$search.'%')
                    ;
            }) 
            : $excercises ;

        $excercises = ($this->sortBy && $this->sortDirection) ? $excercises->orderBy($this->sortBy,$this->sortDirection) : $excercises;
        
        $excercises = $excercises->paginate($this->paginate);

        return view('livewire.admin.professorate.excercise.list-component', [
            'excercises' => $excercises,
        ]);
    }

    public function create()
    {
        $this->excercise = new Excercise;
        $this->pevaluation_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $excercise = Excercise::find($id);
        if ($excercise) {
            $this->excercise = $excercise;
            $this->excercise_id = ($this->excercise) ? $this->excercise->id:null;
            $this->modeEdit = true;
            $this->modeCreate = false;
        }       
    }

    public function save()
    {
        $this->validate();
        $this->excercise->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');
        $this->close();
    }

    public function close()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->topic_id = false;
        $this->excercise = new Excercise;
    }

    public function delete ($id)
    {
        $excercise = Excercise::find($id);
        if ($excercise) {
            $this->excercise = $excercise;
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
        $this->excercise->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
        $this->close();
    }

}
