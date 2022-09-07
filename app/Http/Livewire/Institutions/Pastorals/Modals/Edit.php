<?php

namespace App\Http\Livewire\Institutions\Pastorals\Modals;

use App\Models\app\Pastoral;
use Illuminate\Support\Facades\Gate;
// use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{

    public Pastoral $pastoral;
    public $pastoral_id,$name;

    public $comment_pastoral;

    public function mount($pastoral_id)
    {
        // Gate::authorize('update', $pastoral);

        // dd('123');

        $pastoral = Pastoral::find($pastoral_id);

        $this->pastoral = ($pastoral) ? $pastoral : null ;
        $this->name = ($pastoral) ? $pastoral->name : null ;

        $this->comment_pastoral = Pastoral::COLUMN_COMMENTS;
        // dd($this->comment_pastoral,$this->pastoral);

        // $this->pastoral = $pastoral;
    }

    public function render()
    {
        return view('livewire.institutions.pastorals.modals.edit');
    }

    public function update()
    {
        // Gate::authorize('update', $user);

        $this->pastoral->update(
            [
                'name'=> $this->name,
            ]
        );

        $this->closeModal();

        // $this->closeModalWithEvents([
        //     UserOverview::getName() => ['userModified', [$this->pastoral->id],
        // ]);
    }
}
