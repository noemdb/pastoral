<?php

namespace App\Http\Livewire\Admin\Institution\Curriculum;

use App\Http\Livewire\traits\WithSortingTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Admin\Institution\Curriculum\Traits\CurriculumRules;
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Curriculum;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use CurriculumRules;

    public Curriculum $curriculum;

    public $curriculum_id;

    public $search = ''; //'name','description'

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $pescolars_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Curriculum::COLUMN_COMMENTS; 
        $this->pescolars_list = Pescolar::pescolars_list()->toArray(); 
    }

    public function render()
    {
        $search = $this->search; 

        $curricula = Curriculum::select('curricula.*');  

        $curricula = (!empty($search)) ? $curricula->orwhere(
            function($query) use ($search) {
                $query->orWhere('description','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%');
            }) 
            : //$curricula ; dd($curricula);

        $curricula = ($this->sortBy && $this->sortDirection) ? $curricula->orderBy($this->sortBy,$this->sortDirection) : $curricula;
        
        $curricula = $curricula->paginate($this->paginate);

        return view('livewire.admin.institution.curriculum.list-component', [
            'curricula' => $curricula,
        ]);
    }

    public function create()
    {
        $this->curriculum = new Curriculum;
        $this->curriculum_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->curriculum = Curriculum::find($id);
        $this->curriculum_id = ($this->curriculum) ? $this->curriculum->id:null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->curriculum->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->curriculum = new Curriculum;
        $this->reset(['curriculum_id']);
    }

    public function closeEditMode()
    {
        $this->curriculum_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $curriculum = Curriculum::find($id);
        if ($curriculum) {
            $this->curriculum = $curriculum;
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
        $this->curriculum->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

}
