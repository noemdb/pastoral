<?php

namespace App\Http\Livewire\Preincription\Enrollment;

use App\Models\app\Estudiant\Enrollment;
use App\Models\app\Pastoral;
use App\Models\app\Pescolar;
use Livewire\Component;

class ListComponent extends Component
{
    public $pastoral_id,$pastoral,$levels,$laterality;
    public $step,$limit_step=6;
    public $comment_enrollment,$pastorals_list,$pescolars_list,$citype_list,$gender_list,$laterality_list;

    public function mount()
    {
        $this->step = 1;
        $this->comment_enrollment = Enrollment::COLUMN_COMMENTS;
        $this->pastorals_list = Pastoral::all()->pluck('name','id')->toArray();

        $this->citype_list = ['1'=>'Cédula de Identidad','2'=>'Cédula Escolar','3'=>'Otro'];
        $this->gender_list = ['1'=>'Femenino','2'=>'Masculino'];
        $this->laterality_list = ['Izquierdo(a)'=>'Izquierdo(a)','Derecho(a)'=>'Derecho(a)','Ambidextro(a)'=>'Ambidextro(a)'];
    }

    public function home()
    {
        $this->step = 1;
    }

    public function next()
    {
        $this->step++;
        $this->step = ($this->step > $this->limit_step) ? 1 : $this->step ;
        // $this->emit('updated');
    }

    public function back()
    {
        $this->step--;
        $this->step = ($this->step < 1) ? $this->limit_step : $this->step ;
    }
    public function loadInstitution($id)
    {
        $this->pastoral = Pastoral::find($id);
        if ($this->pastoral) {
            $this->pastoral_id = $this->pastoral->id;
            $this->pescolars_list = Pescolar::where('pastoral_id',$this->pastoral_id)->pluck('name','id')->toArray();
        }
    }

    public function render()
    {
        return view('livewire.preincription.enrollment.list-component');
    }
}
