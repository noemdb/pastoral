<?php

namespace App\Http\Livewire\Admin\Professorate\Document;


use App\Http\Livewire\Admin\Professorate\Document\Traits\DocumentRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Teacher\Document;
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Lapse;
use App\Models\app\Pescolar\Pensum;
use App\Models\app\Pescolar\Section;
use App\Models\app\Teacher;
use App\Models\app\Teacher\Pevaluation;
use App\Models\app\Teacher\Publication;
use App\Models\app\Teacher\Topic;
use Illuminate\Support\Facades\DB;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use DocumentRules;

    public Document $document;

    public $document_id,$section_id;

    public $search = ''; //'name',teacher,cource
    public $pensums;

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $teachers_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Document::COLUMN_COMMENTS; 
        $this->publications_list = Publication::publications_list()->toArray();
    }

    public function render()
    {
        $search = $this->search; 

        $documents = Document::select('documents.*')
            ->join('publications', 'publications.id', '=', 'documents.publication_id')
            ->join('teachers', 'teachers.id', '=', 'publications.teacher_id')
            ;  

        $documents = (!empty($search)) ? $documents->orwhere(
            function($query) use ($search) {
                $query->orWhere('teachers.lastname','like', '%'.$search.'%')
                    ->orWhere('teachers.name','like','%'.$search.'%')
                    ->orWhere('teachers.ci','like','%'.$search.'%')
                    ->orWhere('documents.description','like','%'.$search.'%')
                    ;
            }) 
            : $documents ;

        $documents = ($this->sortBy && $this->sortDirection) ? $documents->orderBy($this->sortBy,$this->sortDirection) : $documents;
        
        $documents = $documents->paginate($this->paginate);

        return view('livewire.admin.professorate.document.list-component', [
            'documents' => $documents,
        ]);
    }

    public function create()
    {
        $this->document = new Document;
        $this->pevaluation_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $document = Document::find($id);
        if ($document) {
            $this->document = $document;
            $this->document_id = ($this->document) ? $this->document->id:null;
            $this->modeEdit = true;
            $this->modeCreate = false;
        }       
    }

    public function save()
    {
        $this->validate();
        $this->document->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');
        $this->close();
    }

    public function close()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->document_id = false;
        $this->document = new Document;
    }

    public function delete ($id)
    {
        $document = Document::find($id);
        if ($document) {
            $this->document = $document;
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
        $this->document->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
        $this->close();
    }

}
