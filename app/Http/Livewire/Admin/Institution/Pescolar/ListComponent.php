<?php

namespace App\Http\Livewire\Admin\Institution\Pescolar;

use App\Http\Livewire\traits\WithSortingTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Admin\Institution\Pescolar\Traits\RulesPescolar;
use App\Models\app\Pastoral;
use App\Models\app\Pescolar;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use RulesPescolar;

    public Pescolar $pescolar;

    public $pescolar_id;

    public $search = ''; //'name','description'

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $tpescolar_list,$pastorals_list,$pescolars_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Pescolar::COLUMN_COMMENTS; 
        $this->pastorals_list = Pastoral::pastorals_list()->toArray(); 
    }

    public function render()
    {
        $search = $this->search; 

        $pescolars = Pescolar::select('pescolars.*');  

        $pescolars = (!empty($search)) ? $pescolars->orwhere(
            function($query) use ($search) {
                $query->orWhere('description','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%');
            }) 
            : //$pescolars ; dd($pescolars);

        $pescolars = ($this->sortBy && $this->sortDirection) ? $pescolars->orderBy($this->sortBy,$this->sortDirection) : $pescolars;
        
        $pescolars = $pescolars->paginate($this->paginate);

        return view('livewire.admin.institution.pescolar.list-component', [
            'pescolars' => $pescolars,
        ]);
    }

    public function create()
    {
        $this->pescolar = new Pescolar;
        $this->pescolar_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->pescolar = Pescolar::find($id);
        $this->pescolar_id = ($this->pescolar) ? $this->pescolar->id:null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->pescolar->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->pescolar = new Pescolar;
        $this->reset(['pescolar_id']);
    }

    public function closeEditMode()
    {
        $this->pescolar_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $pescolar = Pescolar::find($id);
        if ($pescolar) {
            $this->pescolar = $pescolar;
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
        $this->pescolar->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

}
