<?php

namespace App\Http\Livewire\Admin\Professorate\Topic;

use App\Http\Livewire\Admin\Professorate\Topic\Traits\TopicRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Teacher\Topic;
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
    use TopicRules;

    public Topic $topic;

    public $pevaluation_id,$section_id; //'pevaluation_id','description','objetivo','observations','color','header','body','footer','attachment','status'

    public $search = ''; //'name',teacher,cource
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
        $this->list_comment = Topic::COLUMN_COMMENTS; 
        $this->pevaluations_list = Pevaluation::pevaluations_list()->toArray();
    }

    public function render()
    {
        $search = $this->search; 

        $topics = Topic::select('topics.*','')
            ->join('pevaluations', 'pevaluations.id', '=', 'topics.pevaluation_id')
            ->join('teachers', 'teachers.id', '=', 'pevaluations.teacher_id')
            ->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
            ->join('courses', 'courses.id', '=', 'pensums.course_id')
            ;  

        $topics = (!empty($search)) ? $topics->orwhere(
            function($query) use ($search) {
                $query->orWhere('teachers.lastname','like', '%'.$search.'%')
                    ->orWhere('teachers.name','like','%'.$search.'%')
                    ->orWhere('courses.name','like','%'.$search.'%')
                    ->orWhere('topics.description','like','%'.$search.'%')
                    ;
            }) 
            : $topics ;

        $topics = ($this->sortBy && $this->sortDirection) ? $topics->orderBy($this->sortBy,$this->sortDirection) : $topics;
        
        $topics = $topics->paginate($this->paginate);

        return view('livewire.admin.professorate.topic.list-component', [
            'topics' => $topics,
        ]);
    }

    public function create()
    {
        $this->topic = new Topic;
        $this->pevaluation_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $topic = Topic::find($id);
        if ($topic) {
            $this->topic = $topic;
            $this->pevaluation_id = ($this->topic) ? $this->topic->id:null;
            $this->modeEdit = true;
            $this->modeCreate = false;
        }       
    }

    public function save()
    {
        $this->validate();
        $this->topic->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');
        $this->close();
    }

    public function close()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->pevaluation_id = false;
        $this->topic = new Topic;
    }

    public function delete ($id)
    {
        $topic = Topic::find($id);
        if ($topic) {
            $this->topic = $topic;
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
        $this->topic->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
        $this->close();
    }

}
