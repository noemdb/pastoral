<?php

namespace App\Http\Livewire\Admin\Competitor\Enrollment;

use App\Http\Livewire\traits\WithSortingTrait;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

use App\Http\Livewire\Admin\Competitor\Enrollment\Traits\EnrollmentRules;

use App\Models\app\Pescolar;
use App\Models\app\Pescolar\Curriculum;

use App\Models\app\Estudiant;
use App\Models\app\Estudiant\Enrollment;

class ListComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithSortingTrait;
    use EnrollmentRules;

    public Enrollment $enrollment;

    public $enrollment_id;

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
        $this->list_comment = Enrollment::COLUMN_COMMENTS; 
        $this->curricula_list = Curriculum::curricula_list_fullname()->toArray();
    }

    public function render()
    {
        $search = $this->search; 

        $enrollments = Enrollment::select('enrollments.*');  

        $enrollments = (!empty($search)) ? $enrollments->orwhere(
            function($query) use ($search) {
                $query->orWhere('description','like', '%'.$search.'%')
                    ->orWhere('name','like','%'.$search.'%');
            }) 
            : $enrollments ; 

        $enrollments = ($this->sortBy && $this->sortDirection) ? $enrollments->orderBy($this->sortBy,$this->sortDirection) : $enrollments;
        
        $enrollments = $enrollments->paginate($this->paginate);

        //dd($enrollments);

        return view('livewire.admin.competitor.enrollment.list-component', [
            'enrollments' => $enrollments,
        ]); //views/livewire/admin/competitor/enrollment/list-component.blade.php
    }

    public function create()
    {
        $this->enrollment = new Enrollment;
        $this->enrollment_id = null;
        $this->modeCreate = true;
        $this->modeEdit = false;
    }

    public function edit($id)
    {
        $this->enrollment = Enrollment::find($id);
        $this->enrollment_id = ($this->enrollment) ? $this->enrollment->id:null;
        $this->modeEdit = true;
        $this->modeCreate = false;
    }

    public function save()
    {
        $this->validate();
        $this->enrollment->save();

        $this->alert('success', 'Los datos fueron almacenados satisfactoriamente!');

        $this->modeCreate = false;
        $this->modeEdit = false;
        $this->enrollment = new Enrollment;
        $this->reset(['enrollment_id']);
    }

    public function closeEditMode()
    {
        $this->enrollment_id = false;
        $this->modeEdit = false;
    }

    public function closeCreateMode()
    {
        $this->modeCreate = false;
    }

    public function delete ($id)
    {
        $enrollment = Enrollment::find($id);
        if ($enrollment) {
            $this->enrollment = $enrollment;
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
        $this->enrollment->delete();
        $this->alert('success', 'Los datos fueron eliminados satisfactoriamente!');
    }

}
