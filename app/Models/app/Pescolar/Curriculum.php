<?php

namespace App\Models\app\Pescolar;

use App\Models\app\Pescolar\Traits\Curriculum\CurriculumRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Pastoral;
use App\Models\app\Pescolar;
use Illuminate\Support\Facades\DB;

class Curriculum extends Model
{
    use HasFactory;

    use CurriculumRelations;

    protected $fillable = [
        'pescolar_id','code','name','order','capacity','description','observations','status_build_promotion','title',
        'profile','txt_contract_study','status','color','header','body','footer'
	];

	protected $dates = ['created_at','updated_at'];

    const COLUMN_COMMENTS = [
		'pescolar_id' => 'Período Educativo',
		'code' => 'Código',
		'name' => 'Nombres',
		'order' => 'Orden',
		'capacity' => 'Capacidad',
		'description'=>'Descripción',
        'observations'=>'Observaciones',
		'status_build_promotion' => 'Genera promoción',
		'title' => 'Título',
		'profile' => 'Perfil',
		'txt_contract_study'=>'Contrato de Estudio',
		'status' => 'Estado',
		'color' => 'Color',
		'header'=>'Tìtulo',
		'body'=>'Cuerpo',
		'footer'=>'Pie de página',
        ////////////////////////////
		'count_lapses'=>'N.Progr.',

    ];

    public function getFullNameAttribute()
    {
        return "{$this->code} {$this->name}";
    }

    public function lapses_list()
    {
        return $this->lapses->pluck('name','id');
    }

    public function getPastoralAttribute()
    {
        $pastoral = Pastoral::select('pastorals.*')
			->join('pescolars', 'pastorals.id', '=', 'pescolars.pastoral_id')
			->join('curricula', 'pescolars.id', '=', 'curricula.pescolar_id')
			->where('curricula.id',$this->id)
			->first();
        return $pastoral;
	}

	public function levels_list()
    {
        $levels = Level::select('levels.id')
            ->SelectRaw(' levels.code  || " - " || levels.name as name ')
            ->join('lapses', 'lapses.id', '=', 'levels.lapse_id')
            ->join('curricula', 'curricula.id', '=', 'lapses.curriculum_id')
            ->where('curricula.id',$this->id)
            ->pluck('name','id');
        return $levels;
    }

	public static function curricula_list_fullname()
	{
		$curricula_list = Curriculum::select('curricula.id',DB::raw('curricula.name || " | PE. "  || pescolars.name || " | INS. " || pastorals.name as fullnamename' ))
			->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
			->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id')
			->pluck('fullnamename','id'); //dd($curricula_list_fullname);
		return $curricula_list;
	}

    public static function curricula_list()
	{
		return Curriculum::pluck('name','id');
	}

    public function getStatusDeleteAttribute()
    {
        return $this->lapses->isEmpty();
    }

    public function getCountLapsesAttribute()
    {
        return $this->lapses->count();
    }
}

//'pescolar_id','code','name','order','capacity','description','observations','status_build_promotion','title','profile','status','color','header','body','footer',
