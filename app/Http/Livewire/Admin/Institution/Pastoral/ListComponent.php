<?php

namespace App\Http\Livewire\Admin\Institution\Pastoral;

use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\app\Pastoral;

class ListComponent extends Component
{

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
            'pastoral.code' => $this->list_comment['code'],
        ];
    }

    //public $name,$legalname,$code,$code_official,$code_private,$description,$observations,$header,$body,$footer,$rif_institution,$phone,$address,$city,$state_code,$country,$email_institution,$password,$txt_contract_study;

    public $pastorals,$pastoral_id;

    public $modeEdit;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    protected $listeners = [ 'confirmed' ];

    public function mount()
    {
        $this->modeEdit = false;
        $this->list_comment = Pastoral::COLUMN_COMMENTS;
    }

    public function render()
    {
        $this->pastorals = Pastoral::all();
        return view('livewire.admin.institution.pastoral.list-component');
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
        //dd($this->name);
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
}
