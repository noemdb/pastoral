<?php
namespace App\Http\Livewire\Admin\Competitor\Inscription;

use App\Http\Livewire\traits\WithSortingTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Admin\Competitor\Inscription\Traits\InscriptionRules;
use App\Models\app\Estudiant;
use App\Models\app\Pescolar;

use App\Models\app\Pescolar\Curriculum;
use App\Models\app\Estudiant\Inscription;
use App\Models\app\Estudiant\Tinscription;
use App\Models\app\Pescolar\Section;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use InscriptionRules;

    public Inscription $inscription;

    public $inscription_id;

    public $search = ''; //'name','description'

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $tinscription_list,$section_list,$estudiant_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Inscription::COLUMN_COMMENTS; 
        $this->tinscription_list = Tinscription::tinscription_list()->toArray(); //dd($this->tinscription_list);
        $this->section_list = Section::section_list_fullname()->toArray();
        $this->estudiant_list = Estudiant::estudiant_list_fullname()->toArray();
    }

    public function render()
    {
        $search = $this->search; 

        $inscriptions = Inscription::select('inscriptions.*');  

        $inscriptions = (!empty($search)) ? $inscriptions->orwhere(
            function($query) use ($search) {
                $query->orWhere('description','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%');
            }) 
            : $inscriptions ; //dd($inscriptions);

        $inscriptions = ($this->sortBy && $this->sortDirection) ? $inscriptions->orderBy($this->sortBy,$this->sortDirection) : $inscriptions;
        
        $inscriptions = $inscriptions->paginate($this->paginate);

        return view('livewire.admin.competitor.inscription.list-component', [
            'inscriptions' => $inscriptions,
        ]);
    }

    public function create()
    {
        $this->inscription = new Inscription;
        $this->inscription_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->inscription = Inscription::find($id);
        $this->inscription_id = ($this->inscription) ? $this->inscription->id:null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->inscription->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->inscription = new Inscription;
        $this->reset(['inscription_id']);
    }

    public function closeEditMode()
    {
        $this->inscription_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $inscription = Inscription::find($id);
        if ($inscription) {
            $this->inscription = $inscription;
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
        $this->inscription->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

}
