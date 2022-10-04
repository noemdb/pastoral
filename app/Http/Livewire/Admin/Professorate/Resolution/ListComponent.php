<?php

namespace App\Http\Livewire\Admin\Professorate\Resolution;
use App\Http\Livewire\Admin\Professorate\Resolution\Traits\ResolutionRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Teacher\Resolution;
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Lapse;
use App\Models\app\Pescolar\Pensum;
use App\Models\app\Pescolar\Section;
use App\Models\app\Teacher;
use App\Models\app\Teacher\Excercise;
use App\Models\app\Teacher\Pevaluation;
use Illuminate\Support\Facades\DB;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use ResolutionRules;

    public Resolution $resolution;

    public $resolution_id,$section_id; 

    public $search = ''; //'name',teacher,cource
    public $pensums;

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $pevaluations_list,$genders_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Resolution::COLUMN_COMMENTS; 
        $this->excercises_list = Excercise::excercises_list()->toArray();
    }

    public function render()
    {
        $search = $this->search; 

        $resolutions = Resolution::select('resolutions.*','')
            ->join('excercises', 'excercises.id', '=', 'resolutions.excercise_id')
            ->join('topics', 'topics.id', '=', 'excercises.topic_id')
            ->join('pevaluations', 'pevaluations.id', '=', 'topics.pevaluation_id')
            ->join('teachers', 'teachers.id', '=', 'pevaluations.teacher_id')
            ->join('pensums', 'pensums.id', '=', 'pevaluations.pensum_id')
            ->join('courses', 'courses.id', '=', 'pensums.course_id')
            ;  

        $resolutions = (!empty($search)) ? $resolutions->orwhere(
            function($query) use ($search) {
                $query->orWhere('teachers.lastname','like', '%'.$search.'%')
                    ->orWhere('teachers.name','like','%'.$search.'%')
                    ->orWhere('courses.name','like','%'.$search.'%')
                    ->orWhere('resolutions.description','like','%'.$search.'%')
                    ;
            }) 
            : $resolutions ;

        $resolutions = ($this->sortBy && $this->sortDirection) ? $resolutions->orderBy($this->sortBy,$this->sortDirection) : $resolutions;
        
        $resolutions = $resolutions->paginate($this->paginate);

        return view('livewire.admin.professorate.resolution.list-component', [
            'resolutions' => $resolutions,
        ]);
    }

    public function create()
    {
        $this->resolution = new Resolution;
        $this->resolution_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $resolution = Resolution::find($id);
        if ($resolution) {
            $this->resolution = $resolution;
            $this->resolution_id = ($this->resolution) ? $this->resolution->id:null;
            $this->modeEdit = true;
            $this->modeCreate = false;
        }       
    }

    public function save()
    {
        $this->validate();
        $this->resolution->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');
        $this->close();
    }

    public function close()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->resolution_id = false;
        $this->resolution = new Resolution;
    }

    public function delete ($id)
    {
        $resolution = Resolution::find($id);
        if ($resolution) {
            $this->resolution = $resolution;
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
        $this->resolution->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
        $this->close();
    }

}
