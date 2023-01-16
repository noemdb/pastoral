<?php

namespace App\Http\Livewire\Admin\Institution\Library;
// /home/nuser/code/pastoral/app/Http/Livewire/Admin/Institution/Library/Traits/LibraryRules.php



use App\Http\Livewire\Admin\Institution\Library\Traits\LibraryRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Pescolar\Library;
use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Curriculum;
use App\Models\app\Pescolar\Lapse;
use App\Models\app\Pescolar\Level;
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
    use LibraryRules;

    public Library $library;

    public $library_id,$section_id;

    public $search = ''; //'name',description,cource
    public $pensums;

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $curricula_list,$levels_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Library::COLUMN_COMMENTS;
        $this->curricula_list = Curriculum::curricula_list()->toArray();
        $this->levels_list = Level::levels_list_fullname()->toArray();
    }

    public function render()
    {
        $search = $this->search;

        $libraries = Library::select('libraries.*')
            ->leftjoin('levels', 'levels.id', '=', 'libraries.level_id')
            ->leftjoin('lapses', 'lapses.id', '=', 'levels.lapse_id')
            ->leftjoin('curricula', 'curricula.id', '=', 'lapses.curriculum_id')
            ;

        $libraries = (!empty($search)) ? $libraries->orwhere(
            function($query) use ($search) {
                $query->orWhere('libraries.name','like', '%'.$search.'%')
                    ->orWhere('libraries.description','like','%'.$search.'%')
                    ->orWhere('curricula.name','like','%'.$search.'%')
                    ->orWhere('levels.name','like','%'.$search.'%')
                    ->orWhere('levels.description','like','%'.$search.'%')
                    ;
            })
            : $libraries ;

        $libraries = ($this->sortBy && $this->sortDirection) ? $libraries->orderBy($this->sortBy,$this->sortDirection) : $libraries;

        $libraries = $libraries->paginate($this->paginate);

        return view('livewire.admin.institution.library.list-component', [
            'libraries' => $libraries,
        ]);
    }

    public function create()
    {
        $this->library = new Library;
        $this->pevaluation_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $library = Library::find($id);
        if ($library) {
            $this->library = $library;
            $this->library_id = ($this->library) ? $this->library->id:null;
            $this->modeEdit = true;
            $this->modeCreate = false;
        }
    }

    public function save()
    {
        $this->validate();
        $this->library->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');
        $this->close();
    }

    public function close()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->library_id = false;
        $this->library = new Library;
    }

    public function delete ($id)
    {
        $library = Library::find($id);
        if ($library) {
            $this->library = $library;
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
        $this->library->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
        $this->close();
    }

}
