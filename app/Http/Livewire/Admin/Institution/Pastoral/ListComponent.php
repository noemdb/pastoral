<?php

namespace App\Http\Livewire\Admin\Institution\Pastoral;

use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\app\Pastoral;

use Livewire\WithPagination;

class ListComponent extends Component
{

    use WithPagination;
    use LivewireAlert;

    public Pastoral $pastoral;

    protected $rules = [
        'pastoral.name' => 'required|string|min:6',
        'pastoral.code' => 'required|string',
        'pastoral.legalname' => 'required|string',
        'pastoral.code_official' => 'string',
        'pastoral.code_private' => 'string',
        'pastoral.description' => 'string',
        'pastoral.observations' => 'string',
        'pastoral.header' => 'string',
        'pastoral.body' => 'string',
        'pastoral.footer' => 'string',
        'pastoral.rif_institution' => 'string',
        'pastoral.phone' => 'string',
        'pastoral.address' => 'string',
        'pastoral.city' => 'string',
        'pastoral.state_code' => 'string',
        'pastoral.country' => 'string',
        'pastoral.email_institution' => 'string',
        'pastoral.password' => 'string',
        'pastoral.txt_contract_study' => 'string',
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

    public $modeEdit;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeEdit = false;
        $this->list_comment = Pastoral::COLUMN_COMMENTS;
    }

    public function render()
    {
        // $this->pastorals = Pastoral::all();
        // return view('livewire.admin.institution.pastoral.list-component');

        return view('livewire.admin.institution.pastoral.list-component', [
            'pastorals' => Pastoral::paginate(10),
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function edit($id)
    {
        $this->pastoral = Pastoral::find($id); //dd($this->pastoral->toArray());
        $this->pastoral_id = ($this->pastoral) ? $this->pastoral->id:null;
        $this->modeEdit = ($this->pastoral) ? true:false;
    }

    public function save()
    {
        $this->validate();
        $this->pastoral->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeEdit = false;
        $this->reset(['pastoral_id']);
    }

    public function closeEditMode()
    {
        $this->pastoral_id = false;
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
