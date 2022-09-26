<?php

namespace App\Http\Livewire\Admin\Institution\Pensum;

use Illuminate\Support\Facades\DB;

use App\Http\Livewire\traits\WithSortingTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Admin\Institution\Pensum\Traits\PensumRules;
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Pensum;
use App\Models\app\Pescolar\Level;
use App\Models\app\Pescolar\Course;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use PensumRules;

    public Pensum $pensum;

    public $pensum_id,$course_id,$level_id,$level,$levels,$course,$courses;

    public $search = ''; //'name','description'

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $courses_list,$levels_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Pensum::COLUMN_COMMENTS; 
        $this->levels_list = Level::levels_list()->toArray(); 
        $this->courses_list =  Array(); 
        $this->pensums_list = Pensum::pensums_list()->toArray(); 
    }

    public function loadCourses($level_id)
    {
        $level = Level::find($level_id);
        if ($level) {
            $this->level_id = $level->id ; 
            $courses = Course::select('courses.id',DB::raw('courses.code || " - " || courses.name as name' ))->where('curriculum_id',$level->curriculum_id)->get(); //dd($courses);

            if ($courses->isNotEmpty()) {
                $this->courses = $courses;
                $this->courses_list = $courses->pluck('name','id')->toArray();
            }
        } else {
            $this->level_id =  null;
            $this->courses = null;
            $this->courses_list = Array();
        }
    }

    public function render()
    {
        
        $this->courses_list = ($this->level_id) ? Course::coursesLevelId_list ($this->level_id)->toArray() : Array();

        $search = $this->search; 

        $pensums = Pensum::select('pensums.*');  

        $pensums = (!empty($search)) ? $pensums->orwhere(
            function($query) use ($search) {
                $query->orWhere('description','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%');
            }) 
            : $pensums ; //dd($pensums);

        $pensums = ($this->sortBy && $this->sortDirection) ? $pensums->orderBy($this->sortBy,$this->sortDirection) : $pensums;
        
        $pensums = $pensums->paginate($this->paginate);

        return view('livewire.admin.institution.pensum.list-component', [
            'pensums' => $pensums,
        ]);
    }

    public function create()
    {
        $this->pensum = new Pensum;
        $this->pensum_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->pensum = Pensum::find($id);
        $this->pensum_id = ($this->pensum) ? $this->pensum->id:null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->pensum->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->pensum = new Pensum;
        $this->reset(['pensum_id']);
    }

    public function closeEditMode()
    {
        $this->pensum_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $pensum = Pensum::find($id);
        if ($pensum) {
            $this->pensum = $pensum;
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
        $this->pensum->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

}
