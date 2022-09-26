<?php

namespace App\Http\Livewire\Admin\Institution\Authority;

use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\app\Pescolar;
use App\Models\app\Pastoral;
use App\Models\app\Pastoral\Tauthority;
use App\Models\app\Pastoral\Authority;

use Livewire\WithPagination;
use App\Http\Livewire\traits\WithSortingTrait;
use App\Http\Livewire\Admin\Institution\Authority\Traits\RulesAuthority;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use RulesAuthority;

   public Authority $authority;

    public $authority_id;

    public $search = ''; //'name','ci','lastname','profile_professional',

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $tauthority_list,$pastorals_list,$pescolars_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Authority::COLUMN_COMMENTS; 
        $this->tauthority_list = Tauthority::tauthority_list()->toArray(); //dd($this->tauthority_list);
        $this->pescolars_list = Pescolar::pescolars_list()->toArray(); 
        $this->pastorals_list = Pastoral::pastorals_list()->toArray(); 
    }

    public function render()
    {
        $search = $this->search; 

        $authorities = Authority::select('authorities.*');  

        $authorities = (!empty($search)) ? $authorities->orwhere(
            function($query) use ($search) {
                $query->orWhere('name','like', '%'.$search.'%')
                ->orWhere('lastname','like','%'.$search.'%')
                ->orWhere('ci','like','%'.$search.'%');}) 
                : $authorities ; //dd($authorities);    

        $authorities = ($this->sortBy && $this->sortDirection) ? $authorities->orderBy($this->sortBy,$this->sortDirection) : $authorities;
        
        $authorities = $authorities->paginate($this->paginate);

        return view('livewire.admin.institution.authority.list-component', [
            'authorities' => $authorities,
        ]);
    }

    public function create()
    {
        $this->authority = new Authority;
        $this->authority_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->authority = Authority::find($id);
        $this->authority_id = ($this->authority) ? $this->authority->id:null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->authority->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->authority = new Authority;
        $this->reset(['authority_id']);
    }

    public function closeEditMode()
    {
        $this->authority_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $authority = Authority::find($id);
        if ($authority) {
            $this->authority = $authority;
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
        $this->authority->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }
}
