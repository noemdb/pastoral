<?php

namespace App\Http\Livewire\Admin\Institution\Pastoral;

use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;

use App\Models\app\Pastoral;

class ListComponent extends Component
{

     use LivewireAlert;

    public Pastoral $pastoral;

    public $pastorals,$pastoral_id;

    public $list_comment_pastoral;

    public $status_last,$status_first,$saveInto;

    protected $listeners = [ 'confirmed' ];

    public function mount()
    {
        $this->list_comment_pastoral = Pastoral::COLUMN_COMMENTS;
    }

    public function render()
    {
        $this->pastorals = Pastoral::all();
        return view('livewire.admin.institution.pastoral.list-component');
    }
}
