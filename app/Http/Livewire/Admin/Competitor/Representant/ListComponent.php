<?php

namespace App\Http\Livewire\Admin\Competitor\Representant;
//livewire.admin.competitor.representant.list-component

use App\Http\Livewire\Admin\Competitor\Representant\Traits\RepresentantRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Estudiant;
use App\Models\app\Estudiant\Citype;
use App\Models\app\Estudiant\Representant;
use App\Models\app\Pescolar;

use App\Models\app\Pescolar\Curriculum;
use App\Models\app\Estudiant\Trepresentant;
use App\Models\app\Pescolar\Section;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use RepresentantRules;

    public Representant $representant;

    public $representant_id;

    public $search = ''; //'name'

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $representant_list,$citype_list,$genders_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Representant::COLUMN_COMMENTS; 
        $this->citype_list = Citype::citype_list()->toArray();
    }

    public function render()
    {
        $search = $this->search; 

        $representants = Representant::select('representants.*');  

        $representants = (!empty($search)) ? $representants->orwhere(
            function($query) use ($search) {
                $query->orWhere('name','like', '%'.$search.'%')
                    ->orWhere('ci','like','%'.$search.'%')
                    ;
            }) 
            : $representants ; //dd($representants);

        $representants = ($this->sortBy && $this->sortDirection) ? $representants->orderBy($this->sortBy,$this->sortDirection) : $representants;
        
        $representants = $representants->paginate($this->paginate);

        return view('livewire.admin.competitor.representant.list-component', [
            'representants' => $representants,
        ]);
    }

    public function create()
    {
        $this->representant = new Representant;
        $this->representant_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->representant = Representant::find($id);
        $this->representant_id = ($this->representant) ? $this->representant->id:null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->representant->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->representant = new Representant;
        $this->reset(['representant_id']);
    }

    public function closeEditMode()
    {
        $this->representant_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $representant = Representant::find($id);
        if ($representant) {
            $this->representant = $representant;
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
        $this->representant->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
        $this->modeCreate = false;
        $this->modeEdit = false;
    }

}
