<?php

namespace App\Http\Livewire\Admin\Professorate\Lesson;

use App\Http\Livewire\Admin\Professorate\Lesson\Traits\LessonRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Teacher\Lesson;
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Lapse;
use App\Models\app\Pescolar\Pensum;
use App\Models\app\Pescolar\Section;
use App\Models\app\Teacher;
use App\Models\app\Teacher\Pevaluation;
use App\Models\app\Teacher\Topic;
use Illuminate\Support\Facades\DB;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use LessonRules;

    public Lesson $lesson;

    public $topic_id,$section_id;

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
        $this->list_comment = Lesson::COLUMN_COMMENTS; 
        $this->pevaluations_list = Pevaluation::pevaluations_list()->toArray();
        $this->topics_list = Topic::topics_list()->toArray();
        $this->lessons_list = Lesson::lessons_list()->toArray();
    }

    public function render()
    {
        $search = $this->search; 

        $lessons = Lesson::select('lessons.*')
            ->join('topics', 'topics.id', '=', 'lessons.topic_id')
            ->join('pevaluations', 'pevaluations.id', '=', 'topics.pevaluation_id')
            ->join('teachers', 'teachers.id', '=', 'pevaluations.teacher_id')
            ->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
            ->join('courses', 'courses.id', '=', 'pensums.course_id')
            ;  

        $lessons = (!empty($search)) ? $lessons->orwhere(
            function($query) use ($search) {
                $query->orWhere('teachers.lastname','like', '%'.$search.'%')
                    ->orWhere('teachers.name','like','%'.$search.'%')
                    ->orWhere('courses.name','like','%'.$search.'%')
                    ->orWhere('lessons.description','like','%'.$search.'%')
                    ;
            }) 
            : $lessons ;

        $lessons = ($this->sortBy && $this->sortDirection) ? $lessons->orderBy($this->sortBy,$this->sortDirection) : $lessons;
        
        $lessons = $lessons->paginate($this->paginate);

        return view('livewire.admin.professorate.lesson.list-component', [
            'lessons' => $lessons,
        ]);
    }

    public function create()
    {
        $this->lesson = new Lesson;
        $this->pevaluation_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $lesson = Lesson::find($id);
        if ($lesson) {
            $this->lesson = $lesson;
            $this->topic_id = ($this->lesson) ? $this->lesson->id:null;
            $this->modeEdit = true;
            $this->modeCreate = false;
        }       
    }

    public function save()
    {
        $this->validate();
        $this->lesson->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');
        $this->close();
    }

    public function close()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->topic_id = false;
        $this->lesson = new Lesson;
    }

    public function delete ($id)
    {
        $lesson = Lesson::find($id);
        if ($lesson) {
            $this->lesson = $lesson;
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
        $this->lesson->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
        $this->close();
    }

}
