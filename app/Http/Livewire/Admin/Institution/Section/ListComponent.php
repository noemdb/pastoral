<?php

namespace App\Http\Livewire\Admin\Institution\Section;

use App\Http\Livewire\traits\WithSortingTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Admin\Institution\Section\Traits\SectionRules; //app/Http/Livewire/Admin/Institution/Section/Traits/SectionRules.php
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Section;
use App\Models\app\Pescolar\Curriculum;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use SectionRules;

    public Section $level;

    public $section_id;

    public $search = ''; //'name','description'

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $curricula_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Section::COLUMN_COMMENTS; 
        $this->curricula_list = Curriculum::curricula_list()->toArray(); 
    }

    public function render()
    {
        $search = $this->search; 

        $levels = Section::select('levels.*');  

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
        $this->level = new Section;
        $this->section_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->level = Section::find($id);
        $this->section_id = ($this->level) ? $this->level->id:null;
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
        $this->level = new Section;
        $this->reset(['section_id']);
    }

    public function closeEditMode()
    {
        $this->section_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $level = Section::find($id);
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
