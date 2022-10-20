<?php

namespace App\Http\Livewire\Admin\Setup\Role; //livewire.admin.setup.role.list-component
use App\Http\Livewire\Admin\Setup\Role\Traits\RolRules;
use App\Http\Livewire\traits\WithSortingTrait;
use App\Models\app\Pastoral;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\app\Pescolar;
use App\Models\app\Rol\TiTeacher;
use App\Models\sys\Rol;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Laravel\Jetstream\Jetstream;
use Spatie\Permission\Models\Role;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use RolRules;

    public Rol $rol;

    public $rol_id,$user_id;

    public $search = ''; //'name'

    public $modeEdit,$modeCreate;

    public $list_comment,$role_list,$team_list,$list_area,$list_rol;

    public $status_last,$status_first,$saveInto;

    public $ti_teacher_list,$genders_list,$pastorals_list;

    protected $listeners = [ 'remove' ];

    public function mount()
    {
        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->list_comment = Rol::COLUMN_COMMENTS; 
        $this->list_comment = Rol::COLUMN_COMMENTS; 
        $this->list_area = Rol::list_area(); 
        $this->list_rol = Rol::list_rol(); 
        $this->pastorals_list = Pastoral::pastorals_list()->toArray(); //dd($this->role_list);
    }

    public function render()
    {
        $search = $this->search; 

        $users = User::select('users.*','rols.area','rols.rol','pastorals.code')
            ->leftjoin('rols', 'users.id', '=', 'rols.user_id')
            ->leftjoin('pastorals', 'pastorals.id', '=', 'rols.pastoral_id');

        $users = (!empty($search)) ? $users->orwhere(
            function($query) use ($search) {
                $query->orWhere('users.name','like','%'.$search.'%')
                    ->orWhere('rols.area','like', '%'.$search.'%')
                    ->orWhere('rols.rol','like','%'.$search.'%')
                    ->orWhere('pastorals.code','like','%'.$search.'%')
                    ;
            }) 
            : $users ; //dd($users);

        $users = ($this->sortBy && $this->sortDirection) ? $users->orderBy($this->sortBy,$this->sortDirection) : $users;
        
        $users = $users->paginate($this->paginate);

        return view('livewire.admin.setup.role.list-component', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        $this->rol = new Rol;
        $this->rol_id = null;        
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->user_id = $user->id;

        $rol = $user->rol;
        if ($rol) {
            $this->rol = $rol;
            $this->rol_id = $rol->id;
            $this->modeEdit = true;
            $this->modeCreate = false;
        } else {
            $this->create();
        }
    }

    public function save()
    {
        $this->validate();

        $this->rol->user_id = $this->user_id;
        
        $this->rol->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->rol = new Rol;
        $this->reset(['rol_id']);
    }

    public function close()
    {
        $this->rol_id = false;
        $this->modeEdit = false;
        $this->modeCreate = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $user = User::findOrFail($id);
        $rol = Rol::find($user->id);
        if ($rol) {
            $this->rol = $rol;
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
        $this->rol->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

}
