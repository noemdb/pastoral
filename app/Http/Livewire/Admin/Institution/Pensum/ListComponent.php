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
use App\Models\app\Pescolar\Curriculum;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use PensumRules;

    public Pensum $pensum;

    public $level_pensums,$pensum_id,$course_id,$level_id,$level,$levels,$course,$courses;

    public $search = ''; //'name','description'

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $courses_list,$levels_list,$pensums_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->level_pensums = Array();
        $this->list_comment = Pensum::COLUMN_COMMENTS;
        $this->levels_list = Level::levels_list_fullname()->toArray();
        // $this->courses_list =  Array();
        $this->loadCourses();
        $this->pensums_list = Pensum::pensums_list()->toArray();
    }

    public function loadCourses($level_id = null)
    {
        $level = Level::find($level_id); //dd($level);
        $this->courses_list = ($level) ? $level->courses_list->toArray() : Array() ;
    }

    public function render()
    {
        $search = $this->search;

        $pensums = Pensum::select('pensums.*')
            ->join('levels', 'levels.id', '=', 'pensums.level_id')
            ->join('courses', 'courses.id', '=', 'pensums.course_id');

        $pensums = (!empty($search)) ? $pensums->orwhere(
            function($query) use ($search) {
                $query->orWhere('courses.description','like', '%'.$search.'%')
                    ->orWhere('courses.name','like','%'.$search.'%');
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
        $this->level_pensums = Array();
    }

    public function edit($id)
    {
        $pensum = Pensum::find($id);
        if ($pensum) {
            $this->pensum = $pensum;
            $this->pensum_id = $pensum->id;
            $this->level = $pensum->level;
            $this->level_id = $pensum->level_id;
            $this->level_pensums = $this->level->pensums;
            $this->modeEdit = true;
            $this->modeCreate = false;
            $this->loadCourses($this->level->id);
        }
    }

    public function save()
    {
        $this->validate();
        $this->pensum->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->pensum = new Pensum;
        // $this->reset(['pensum_id']);
    }

    public function closeEditMode()
    {
        $this->pensum_id = false;
        $this->modeEdit = false;
        $this->modeCreate = false;
    }

    public function closeCreateMode()
    {
        $this->pensum_id = false;
        $this->modeEdit = false;
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
