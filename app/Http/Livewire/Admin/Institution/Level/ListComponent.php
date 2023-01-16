<?php

namespace App\Http\Livewire\Admin\Institution\Level;

use App\Http\Livewire\traits\WithSortingTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Admin\Institution\Level\Traits\LevelRules; //app/Http/Livewire/Admin/Institution/Level/Traits/LevelRules.php
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Level;
use App\Models\app\Pescolar\Curriculum;
use App\Models\app\Pescolar\Lapse;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use LevelRules;

    public Level $level;

    public $level_id;

    public $search = ''; //'name','description'

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $curricula_list,$lapses_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Level::COLUMN_COMMENTS;
        $this->curricula_list = Curriculum::curricula_list_fullname()->toArray();
        $this->lapses_list = Lapse::lapses_list()->toArray();
    }

    public function render()
    {
        $search = $this->search;

        $levels = Level::select('levels.*');

        $levels = (!empty($search)) ? $levels->orwhere(
            function($query) use ($search) {
                $query->orWhere('description','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%');
            })
            : $levels ; //dd($levels);

        $levels = ($this->sortBy && $this->sortDirection) ? $levels->orderBy($this->sortBy,$this->sortDirection) : $levels;

        $levels = $levels->paginate($this->paginate);

        return view('livewire.admin.institution.level.list-component', [
            'levels' => $levels,
        ]);
    }

    public function create()
    {
        $this->level = new Level;
        $this->level_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->level = Level::find($id);
        $this->level_id = ($this->level) ? $this->level->id:null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->level->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->level = new Level;
        $this->reset(['level_id']);
    }

    public function closeEditMode()
    {
        $this->level_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $level = Level::find($id);
        if ($level) {
            $this->level = $level;
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
        $this->level->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

}
