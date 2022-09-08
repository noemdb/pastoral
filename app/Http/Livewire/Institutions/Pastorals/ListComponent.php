<?php

namespace App\Http\Livewire\Institutions\Pastorals;

use Livewire\Component;

use App\Models\app\Pastoral;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ListComponent extends Component
{
	public Pastoral $pastoral;
	public $name,$legalname,$code,$code_official,$code_private,$description,$observations,$color,$header,$body,$footer,$rif_institution,$phone,$address,$city,$state,$state_code,$country,$email_institution,$password,$txt_contract_study;
	public $comment_pastoral;


	public $modeEdit,$modeList,$modeCreate;

	public function mount()
	{
		$this->comment_pastoral = Pastoral::COLUMN_COMMENTS;

		$this->modeList = false;
		$this->modeEdit = false;
		$this->modeCreate = false;
	}

    protected $listeners = ['editPastoral'];

    public function editPastoral($data)
    {
    	$pastoral_id = (array_key_exists('pastoral_id',$data)) ? $data['pastoral_id'] : null;
		$pastoral = Pastoral::find($pastoral_id); 
		$this->pastoral = $pastoral;
		$this->name = $pastoral->name;

		//dd($this->pastoral);

		$this->modeEdit = true;
        $this->modeList = false;
		$this->modeCreate = false;
    }

    public function render()
    {
        return view('livewire.institutions.pastorals.list-component');
    }
}
