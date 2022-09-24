<?php

namespace App\Http\Livewire\Admin\Institution\Authority;

use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\app\Pastoral\Authority;

use Livewire\WithPagination;
use App\Http\Livewire\traits\WithSortingTrait;

class ListComponent extends Component
{

    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;

   public Authority $authority;

   //'tauthority_id','pescolar_id','pastoral_id','name','lastname','ci','position','profile_professional','photo','finicial','ffinal',

    protected $rules = [
        'authority.tauthority_id' => 'required|integer|min:6',
        'authority.pescolar_id' => 'required|integer',
        'authority.pastoral_id' => 'required|integer',
        'authority.name' => 'required|string', //
        'authority.lastname' => 'required|string', //
        'authority.ci' => 'required|integer',
        'authority.position' => 'required', //
        'authority.profile_professional' => 'required', //
        'authority.photo' => 'nullable', //
        'authority.finicial' => 'required|date', //
        'authority.ffinal' => 'required|date',
    ];

    protected function validationAttributes()
    {
        return [
            'authority.tauthority_id' => $this->list_comment['tauthority_id'],
            'authority.pescolar_id' => $this->list_comment['pescolar_id'],
            'authority.pastoral_id' => $this->list_comment['pastoral_id'],
            'authority.name' => $this->list_comment['name'],
            'authority.lastname' => $this->list_comment['lastname'],
            'authority.ci' => $this->list_comment['ci'],
            'authority.position' => $this->list_comment['position'],
            'authority.profile_professional' => $this->list_comment['profile_professional'],
            'authority.photo' => $this->list_comment['photo'],
            'authority.finicial' => $this->list_comment['finicial'],
            'authority.ffinal' => $this->list_comment['ffinal']
        ];
    }

    public $authority_id;

    public $search = '';

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $tauthority_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Authority::COLUMN_COMMENTS;
        $this->pastorals_list = Authority::pastorals_list(); //dd($this->pastorals_list);
        $this->tauthority_list = Authority::tauthority_list(); //dd($this->tauthority_list);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $search = $this->search; 

        $authorities = Authority::latest();  

        $authorities = (!empty($search)) ? $authorities->orWhere( function($query) use ($search) {$query->orWhere('name','like', '%'.$search.'%')->orWhere('legalname','like','%'.$search.'%')->orWhere('description','like','%'.$search.'%');}) : $authorities ;     

        $authorities = ($this->sortBy && $this->sortDirection) ? $authorities->orderBy($this->sortBy,$this->sortDirection) : $authorities;
        
        $authorities = $authorities->paginate($this->paginate);

        return view('livewire.admin.institution.authority.list-component', [
            'authorities' => $authorities,
        ]);
    }

    public function edit($id)
    {
        $this->authority = Authority::find($id); //dd($this->authority->toArray());
        $this->authority_id = ($this->authority) ? $this->authority->id:null;
        $this->modeEdit = ($this->authority) ? true:false;
    }

    public function save()
    {
        $this->validate();
        $this->authority->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeEdit = false;
        $this->reset(['pastoral_id']);
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
