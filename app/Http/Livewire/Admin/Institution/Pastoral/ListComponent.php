<?php

namespace App\Http\Livewire\Admin\Institution\Pastoral;

use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\app\Pastoral;

use Livewire\WithPagination;
use App\Http\Livewire\traits\WithSortingTrait;

class ListComponent extends Component
{

    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;

    public Pastoral $pastoral;

    protected $rules = [
        'pastoral.name' => 'required|string|min:6',
        'pastoral.code' => 'required|string',
        'pastoral.legalname' => 'required|required|string',
        'pastoral.code_official' => 'string|nullable', //
        'pastoral.code_private' => 'string|nullable', //
        'pastoral.description' => 'required|string',
        'pastoral.observations' => 'nullable', //
        'pastoral.header' => 'nullable', //
        'pastoral.body' => 'nullable', //
        'pastoral.footer' => 'nullable', //
        'pastoral.rif_institution' => 'required|string',
        'pastoral.phone' => 'required|string',
        'pastoral.address' => 'required|string',
        'pastoral.city' => 'required|string',
        'pastoral.state_code' => 'nullable', //
        'pastoral.country' => 'required|string',
        'pastoral.email_institution' => 'nullable',
        'pastoral.password' => 'nullable',
        'pastoral.txt_contract_study' => 'required|string',
    ];

    protected function validationAttributes()
    {
        return [
            'pastoral.name' => $this->list_comment['name'],
            'pastoral.code' => $this->list_comment['legalname'],
            'pastoral.legalname' => $this->list_comment['code'],
            'pastoral.code_official' => $this->list_comment['code_official'],
            'pastoral.code_private' => $this->list_comment['code_private'],
            'pastoral.description' => $this->list_comment['description'],
            'pastoral.observations' => $this->list_comment['observations'],
            'pastoral.header' => $this->list_comment['header'],
            'pastoral.body' => $this->list_comment['body'],
            'pastoral.footer' => $this->list_comment['footer'],
            'pastoral.rif_institution' => $this->list_comment['rif_institution'],
            'pastoral.phone' => $this->list_comment['phone'],
            'pastoral.address' => $this->list_comment['address'],
            'pastoral.city' => $this->list_comment['city'],
            'pastoral.state_code' => $this->list_comment['state_code'],
            'pastoral.country' => $this->list_comment['country'],
            'pastoral.email_institution' => $this->list_comment['email_institution'],
            'pastoral.password' => $this->list_comment['password'],
            'pastoral.txt_contract_study' => $this->list_comment['txt_contract_study'],
        ];
    }

    public $pastoral_id;

    public $search = '';

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Pastoral::COLUMN_COMMENTS;
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

        $pastorals = Pastoral::select('pastorals.*');

        $pastorals = (!empty($search)) ? $pastorals->orWhere( function($query) use ($search) {$query->orWhere('name','like', '%'.$search.'%')->orWhere('legalname','like','%'.$search.'%')->orWhere('description','like','%'.$search.'%');}) : $pastorals ;

        $pastorals = ($this->sortBy && $this->sortDirection) ? $pastorals->orderBy($this->sortBy,$this->sortDirection) : $pastorals;

        $pastorals = $pastorals->paginate($this->paginate);

        return view('livewire.admin.institution.pastoral.list-component', [
            'pastorals' => $pastorals,
        ]);
    }

    public function create()
    {
        $this->pastoral = new Pastoral;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function store()
    {
        $validatedData = $this->validate();
        $this->pastoral->save();
        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->reset(['pastoral_id']);
    }

    public function edit($id)
    {
        $this->pastoral = Pastoral::find($id); //dd($this->pastoral->toArray());
        $this->pastoral_id = ($this->pastoral) ? $this->pastoral->id:null;
        $this->modeCreate = false;
        $this->modeEdit = true;
    }

    public function save()
    {
        $this->validate();
        $this->pastoral->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeEdit = false;
        $this->modeCreate = false;
        $this->reset(['pastoral_id']);
    }

    public function closeEditMode()
    {
        $this->pastoral_id = false;
        $this->modeCreate = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->pastoral_id = false;
        $this->modeCreate = false;
        $this->modeEdit = false;
    }

    public function delete ($id)
    {
        $pastoral = Pastoral::find($id);
        if ($pastoral) {
            $this->pastoral = $pastoral;
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
        $this->pastoral->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }
}
