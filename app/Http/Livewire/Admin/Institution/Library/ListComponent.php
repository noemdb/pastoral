<?php

namespace App\Http\Livewire\Admin\Institution\Library;
// /home/nuser/code/pastoral/app/Http/Livewire/Admin/Institution/Library/Traits/LibraryRules.php



use App\Http\Livewire\Admin\Institution\Library\Traits\LibraryRules;
use App\Http\Livewire\traits\WithSortingTrait;
use App\Models\app\Pastoral;
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

    public $pastoral_id,$pescolar_id,$curricula_id,$lapse_id,$level_id,$section_id,$library_id;

    public $search = ''; //'name',description,cource
    public $pensums;

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $pastorals_list,$pescolars_list,$curricula_list,$lapses_list,$levels_list,$sections_list;

    public $pescolar,$level;

    public $pevaluation_id;

    protected $listeners = [ 'remove' ];

    public function loadPescolars($pastoral_id = null)
    {
        $pastoral = Pastoral::find($pastoral_id);
        if ($pastoral) {
            $this->pescolars_list = $pastoral->pescolars_list()->toArray();
        } else {
            $this->library->pescolar_id= null;
            $this->pescolars_list = Array();
        }

        $this->curricula_list = Array();
        $this->lapses_list = Array();
        $this->levels_list = Array();
        $this->sections_list = Array();

        $this->library->curriculum_id = null;
        $this->library->lapse_id = null;
        $this->library->level_id = null;
        $this->library->section_id = null;
    }

    public function loadCurricula($pescolar_id = null)
    {
        $pescolar = Pescolar::find($pescolar_id); //dd($level);

        if ($pescolar) {
            $this->curricula_list = $pescolar->curricula_list()->toArray();
        } else {
            $this->library->curriculum_id = null;
            $this->curricula_list = Array();
        }

        $this->lapses_list = Array();
        $this->levels_list = Array();
        $this->sections_list = Array();

        $this->library->lapse_id = null;
        $this->library->level_id = null;
        $this->library->section_id = null;
    }

    public function loadLapses($curriculum_id = null)
    {
        $curriculum = Curriculum::find($curriculum_id);
        if ($curriculum) {
            $this->lapses_list = $curriculum->lapses_list()->toArray();
        } else {
            $this->library->lapse_id = null;
            $this->lapses_list = Array();
        }
        $this->lapses_list = ($curriculum) ? $curriculum->lapses_list()->toArray() : Array() ;
        $this->levels_list = Array();
        $this->sections_list = Array();

        $this->library->level_id = null;
        $this->library->section_id = null;
    }

    public function loadLevels($lapse_id = null)
    {
        $lapse = lapse::find($lapse_id);
        if ($lapse) {
            $this->levels_list = $lapse->levels_list()->toArray();
        } else {
            $this->library->section_id = null;
            $this->sections_list = Array();
        }
        $this->sections_list = Array(); $this->library->section_id = null;
    }

    public function loadSections($level_id = null)
    {
        $level = Level::find($level_id); //dd($level);
        $this->sections_list = ($level) ? $level->sections_list()->toArray() : Array() ;
    }

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Library::COLUMN_COMMENTS;
        $this->pastorals_list = Pastoral::pastorals_list()->toArray();
        $this->pescolars_list = Array();
        $this->curricula_list = Array();
        $this->lapses_list = Array();
        $this->levels_list = Array();
        $this->sections_list = Array();
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
        $library = Library::find($id); //dd($library);
        if ($library) {
            $this->library = $library;
            $this->library_id = $this->library->id;
            $this->modeEdit = true;
            $this->modeCreate = false;

            if ($this->library->pastoral_id) {
                $pastoral = Pastoral::find($this->library->pastoral_id);
                $this->pescolars_list = ($pastoral) ? $pastoral->pescolars_list()->toArray() : Array() ;
                if ($this->library->pescolar_id) {
                    $pescolar = Pescolar::find($this->library->pescolar_id); //dd($level);
                    $this->curricula_list = ($pescolar) ? $pescolar->curricula_list()->toArray() : Array() ;
                    if ($this->library->curriculum_id) {
                        $curriculum = Curriculum::find($this->library->curriculum_id); //dd($level);
                        $this->lapses_list = ($curriculum) ? $curriculum->lapses_list()->toArray() : Array() ;
                        if ($this->library->lapse_id) {
                            $lapse = lapse::find($this->library->lapse_id); //dd($level);
                            $this->levels_list = ($lapse) ? $lapse->levels_list()->toArray() : Array() ;
                            if ($this->library->level_id) {
                                $this->loadSections($this->library->level_id);
                            }
                        }
                    }
                }
            }
        }
    }

    public function save()
    {
        $this->validate();
        // dd($this->library);
        $this->library->save();

        $this->library_id = $this->library->id;

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
