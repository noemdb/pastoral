<?php

namespace App\Http\Livewire\Admin\Professorate\Publication;
use App\Http\Livewire\Admin\Professorate\Publication\Traits\PublicationRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Teacher\Publication;
use App\Models\app\Pescolar\Section;
use App\Models\app\Teacher;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use PublicationRules;

    public Publication $publication;

    public $pevaluation_id,$section_id; //'teacher_id','pensum_id','lapse_id','section_id'

    public $search = ''; //'name'
    public $pensums;

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $ti_teacher_list,$genders_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Publication::COLUMN_COMMENTS; 
        $this->teachers_list = Teacher::teachers_list()->toArray();
    }

    public function render()
    {
        $search = $this->search;
        
        $publications = Publication::select('publications.*','')
            ->join('teachers', 'teachers.id', '=', 'publications.teacher_id')
            ;  

        $publications = (!empty($search)) ? $publications->orwhere(
            function($query) use ($search) {
                $query->orWhere('teachers.lastname','like', '%'.$search.'%')
                    ->orWhere('teachers.name','like','%'.$search.'%')
                    ->orWhere('publications.description','like','%'.$search.'%')
                    ;
            }) 
            : $publications ; 

        $publications = ($this->sortBy && $this->sortDirection) ? $publications->orderBy($this->sortBy,$this->sortDirection) : $publications;
        
        $publications = $publications->paginate($this->paginate);

        return view('livewire.admin.professorate.publication.list-component', [
            'publications' => $publications,
        ]);
    }

    public function changeSection($section_id)
    {        
        $section = Section::find($section_id);
        if ($section) {
            $this->loadPensums($section);
            $this->loadLapses($section);
        } else {
            $this->section_id =  null;
            $this->pensums = null;
            $this->pensums_list = Array();
        }
    }

    public function loadPensums($section)
    {
        $pensums = $section->pensums;
        $this->pensums_list = ($pensums->isNotEmpty()) ? $pensums->pluck('name','id')->toArray() : Array() ;
    }

    public function loadLapses($section)
    {
        $lapses = $section->lapses;
        $this->lapses_list = ($lapses->isNotEmpty()) ? $lapses->pluck('lapseName','id')->toArray() : Array() ;
    }

    public function create()
    {
        $this->publication = new Publication;
        $this->pevaluation_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $publication = Publication::find($id);
        if ($publication) {
            $this->publication = $publication;
            $this->pevaluation_id = ($this->publication) ? $this->publication->id:null;
            $this->modeEdit = true;
            $this->modeCreate = false;
            $this->changeSection($this->publication->section_id);
        }       
    }

    public function save()
    {
        $this->validate();
        $this->publication->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');
        $this->close();
    }

    public function close()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->pevaluation_id = false;
        $this->publication = new Publication;
    }

    public function delete ($id)
    {
        $publication = Publication::find($id);
        if ($publication) {
            $this->publication = $publication;
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
        $this->publication->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
        $this->close();
    }

}
