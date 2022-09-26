<?php

namespace App\Models\app\Pescolar;

use App\Models\app\Pescolar\Traits\Curriculum\CurriculumRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    use CurriculumRelations;

    protected $fillable = [
        'pescolar_id','code','name','order','capacity','description','observations','status_build_promotion','title',
        'profile','status','color','header','body','footer'
	];
	
	protected $dates = ['created_at','updated_at'];

    const COLUMN_COMMENTS = [
		'pescolar_id' => 'P.Educativo',
		'code' => 'Código',
		'name' => 'Nombres',
		'order' => 'Orden',
		'capacity' => 'Capacidad',
		'description'=>'Descripción',
        'observations'=>'Observaciones',
		'status_build_promotion' => 'Genera promosión',
		'title' => 'Título',
		'profile' => 'Perfil',
		'status' => 'Estado',
		'color' => 'Color',
		'header'=>'Tìtulo',
		'body'=>'Cuerpo',
		'footer'=>'Pie de página',
    ];
    
    public function getFullNameAttribute()
    {
        return "{$this->code} {$this->name}";
    }
}

//'pescolar_id','code','name','order','capacity','description','observations','status_build_promotion','title','profile','status','color','header','body','footer',