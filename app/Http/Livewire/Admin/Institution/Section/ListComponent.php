<?php

namespace App\Http\Livewire\Admin\Institution\Section;

use App\Http\Livewire\traits\WithSortingTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Admin\Institution\Section\Traits\SectionRules; //app/Http/Livewire/Admin/Institution/Section/Traits/SectionRules.php
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Section;
use App\Models\app\Pescolar\Level;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use SectionRules;

    public Section $section;

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
        $this->levels_list = Level::levels_list_fullname()->toArray(); 
    }

    public function render()
    {
        $search = $this->search; 

        $sections = Section::select('sections.*');  

        $sections = (!empty($search)) ? $sections->orwhere(
            function($query) use ($search) {
                $query->orWhere('description','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%');
            }) 
            : $sections ; //dd($sections);

        $sections = ($this->sortBy && $this->sortDirection) ? $sections->orderBy($this->sortBy,$this->sortDirection) : $sections;
        
        $sections = $sections->paginate($this->paginate);

        return view('livewire.admin.institution.section.list-component', [
            'sections' => $sections,
        ]);
    }

    public function create()
    {
        $this->section = new Section;
        $this->section_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->section = Section::find($id);
        $this->section_id = ($this->section) ? $this->section->id:null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->section->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->section = new Section;
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
        $section = Section::find($id);
        if ($section) {
            $this->section = $section;
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
        $this->section->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

}
