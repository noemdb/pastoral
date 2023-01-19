<?php

namespace App\Http\Livewire\Admin\Competitor\Estudiant;
//return view('livewire.admin.competitor.estudiant.list-component');

use App\Http\Livewire\Admin\Competitor\Estudiant\Traits\EstudiantRules;
use App\Http\Livewire\traits\WithSortingTrait;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Estudiant;
use App\Models\app\Estudiant\Citype;
use App\Models\app\Estudiant\Representant;
use App\Models\app\Pescolar;

use App\Models\app\Pescolar\Curriculum;
use App\Models\app\Estudiant\Testudiant;
use App\Models\app\Pescolar\Section;
use App\Models\app\Word\City;
use App\Models\app\Word\Country;
use App\Models\app\Word\State;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use EstudiantRules;

    public Estudiant $estudiant;

    public $estudiant_id,$country,$state,$city;

    public $search = ''; //'name'

    public $modeEdit,$modeCreate;

    public $list_comment;

    public $status_last,$status_first,$saveInto;

    public $representant_list,$citype_list,$genders_list,$country_list,$state_list,$city_list;

    protected $listeners = [ 'remove' ];

    //validate RealTime
    public function updated($propertyName) { $this->validateOnly($propertyName);}

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Estudiant::COLUMN_COMMENTS;
        $this->representant_list = Representant::representant_list()->toArray(); //dd($this->testudiant_list);
        $this->citype_list = Citype::citype_list()->toArray();
        $this->genders_list = ['Masculino'=>'Masculino', 'Femenino'=>'Femenino'];

        $this->country_list = Country::all()->pluck('name','id')->toArray();
        $this->state_list = Array();
        $this->city_list = Array();
        $this->country_id = null;
        $this->state_id = null;
        $this->city_id = null;
    }

    public function render()
    {
        $search = $this->search;

        $estudiants = Estudiant::select('estudiants.*');

        $estudiants = (!empty($search)) ? $estudiants->orwhere(
            function($query) use ($search) {
                $query->orWhere('lastname','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%')
                    ->orWhere('ci','like','%'.$search.'%')
                    ;
            })
            : $estudiants ; //dd($estudiants);

        $estudiants = ($this->sortBy && $this->sortDirection) ? $estudiants->orderBy($this->sortBy,$this->sortDirection) : $estudiants;

        $estudiants = $estudiants->paginate($this->paginate);

        return view('livewire.admin.competitor.estudiant.list-component', [
            'estudiants' => $estudiants,
        ]);
    }

    public function create()
    {
        $this->estudiant = new Estudiant;
        $this->estudiant_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->estudiant = Estudiant::find($id);
        $this->estudiant_id = ($this->estudiant) ? $this->estudiant->id:null;
        $this->country_list = Country::all()->pluck('name','id')->toArray();
        $this->updatedEstudiantCountryId();
        $this->updatedEstudiantStateId();

        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->estudiant->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->estudiant = new Estudiant;
        $this->reset(['estudiant_id']);
    }

    public function closeEditMode()
    {
        $this->estudiant_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $estudiant = Estudiant::find($id);
        if ($estudiant) {
            $this->estudiant = $estudiant;
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
        $this->estudiant->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

    public function updatedEstudiantCountryId()
    {
        $id = $this->estudiant->country_id;
        if ($id) {
            $this->country = Country::find($id);
            $this->state_list = State::where('country_id',$id)->orderBy('name')->pluck('name','id')->toArray();
        } else {
            $this->state_list = Array();
            $this->city_list = Array();
            $this->state = null;
            $this->estudiant->state_id = null;
            $this->estudiant->city_id = null;
        }
    }

    public function updatedEstudiantStateId()
    {
        $id = $this->estudiant->state_id;
        if ($id) {
            $this->state = State::find($id);
            $this->city_list = City::where('state_id',$id)->orderBy('name')->pluck('name','id')->toArray() ;
        } else {
            $this->city_list = Array();
            $this->estudiant->city_id = null;
        }
    }

}
