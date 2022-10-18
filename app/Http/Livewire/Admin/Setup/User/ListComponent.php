<?php

namespace App\Http\Livewire\Admin\Setup\User; //livewire.admin.setup.user.list-component

use App\Http\Livewire\Admin\Setup\User\Traits\UserRules;
use App\Http\Livewire\traits\WithSortingTrait;
use App\Models\app\Pastoral;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\User;
use App\Models\app\Pescolar;
use App\Models\app\User\TiTeacher;
use App\Models\sys\Rol;
use Illuminate\Support\Facades\DB;
use Laravel\Jetstream\Jetstream;
use Spatie\Permission\Models\Role;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use UserRules;

    public User $user;

    public $user_id,$user_password;

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
        $this->list_comment = User::COLUMN_COMMENTS; 
        $this->list_area = Rol::list_area(); 
        $this->list_rol = Rol::list_rol(); 
        $this->pastorals_list = Pastoral::latest()->pluck('name','id')->toArray(); //dd($this->role_list);
        $this->team_list = DB::table('teams')->select('name','id')->pluck('name','id')->toArray(); //dd($this->team_list);
        $this->genders_list = ['Masculino'=>'Masculino', 'Femenino'=>'Femenino'];
    }

    public function render()
    {
        $search = $this->search; 

        $users = User::select('users.*');

        $users = (!empty($search)) ? $users->orwhere(
            function($query) use ($search) {
                $query->orWhere('lastname','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%')
                    ->orWhere('ci','like','%'.$search.'%')
                    ;
            }) 
            : $users ; //dd($users);

        $users = ($this->sortBy && $this->sortDirection) ? $users->orderBy($this->sortBy,$this->sortDirection) : $users;
        
        $users = $users->paginate($this->paginate);

        return view('livewire.admin.setup.user.list-component', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        $this->user = new User;
        $this->user_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->user = User::find($id); //dd($this->user);
        $this->user_id = ($this->user) ? $this->user->id : null;
        $this->user_password = ($this->user) ? $this->user->password : null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();

        dd($this->user);
        
        $this->user->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->user = new User;
        $this->reset(['user_id']);
    }

    public function close()
    {
        $this->user_id = false;
        $this->modeEdit = false;
        $this->modeCreate = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $user = User::find($id);
        if ($user) {
            $this->user = $user;
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
        $this->user->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

}
