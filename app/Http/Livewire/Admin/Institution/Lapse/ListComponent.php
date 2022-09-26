<?php

namespace App\Http\Livewire\Admin\Institution\Lapse;

use App\Http\Livewire\traits\WithSortingTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Admin\Institution\Lapse\Traits\LapseRules;
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Lapse;
use App\Models\app\Pescolar\Curriculum;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use LapseRules;

    public Lapse $lapse;

    public $lapse_id;

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
        $this->list_comment = Lapse::COLUMN_COMMENTS; 
        $this->curricula_list = Curriculum::curricula_list()->toArray(); 
    }

    public function render()
    {
        $search = $this->search; 

        $lapses = Lapse::select('lapses.*');  

        $lapses = (!empty($search)) ? $lapses->orwhere(
            function($query) use ($search) {
                $query->orWhere('description','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%');
            }) 
            : $lapses ; //dd($lapses);

        $lapses = ($this->sortBy && $this->sortDirection) ? $lapses->orderBy($this->sortBy,$this->sortDirection) : $lapses;
        
        $lapses = $lapses->paginate($this->paginate);

        return view('livewire.admin.institution.lapse.list-component', [
            'lapses' => $lapses,
        ]);
    }

    public function create()
    {
        $this->lapse = new Lapse;
        $this->lapse_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->lapse = Lapse::find($id);
        $this->lapse_id = ($this->lapse) ? $this->lapse->id:null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->lapse->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->lapse = new Lapse;
        $this->reset(['lapse_id']);
    }

    public function closeEditMode()
    {
        $this->lapse_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $lapse = Lapse::find($id);
        if ($lapse) {
            $this->lapse = $lapse;
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
        $this->lapse->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

}
