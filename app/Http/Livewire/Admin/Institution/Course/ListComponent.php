<?php

namespace App\Http\Livewire\Admin\Institution\Course;

use App\Http\Livewire\traits\WithSortingTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Admin\Institution\Course\Traits\CourseRules;
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Course;
use App\Models\app\Pescolar\Curriculum;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use CourseRules;

    public Course $course;

    public $course_id;

    public $search = ''; //'name','description'

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $curricula_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Course::COLUMN_COMMENTS; 
        $this->curricula_list = Curriculum::curricula_list()->toArray(); 
    }

    public function render()
    {
        $search = $this->search; 

        $courses = Course::select('courses.*');  

        $courses = (!empty($search)) ? $courses->orwhere(
            function($query) use ($search) {
                $query->orWhere('description','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%');
            }) 
            : $courses ; //dd($courses);

        $courses = ($this->sortBy && $this->sortDirection) ? $courses->orderBy($this->sortBy,$this->sortDirection) : $courses;
        
        $courses = $courses->paginate($this->paginate);

        return view('livewire.admin.institution.course.list-component', [
            'courses' => $courses,
        ]);
    }

    public function create()
    {
        $this->course = new Course;
        $this->course_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->course = Course::find($id);
        $this->course_id = ($this->course) ? $this->course->id:null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->course->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->course = new Course;
        $this->reset(['course_id']);
    }

    public function closeEditMode()
    {
        $this->course_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $course = Course::find($id);
        if ($course) {
            $this->course = $course;
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
        $this->course->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

}
