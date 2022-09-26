<?php

namespace App\Models\app\Pescolar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Pescolar\Traits\Level\LevelRelations; //app/Models/app/Pescolar/Traits/Level/LevelRelations.php

class Level extends Model
{
    use HasFactory;

    use LevelRelations;

    protected $fillable = [
        'curriculum_id','code','code_sm','name','description','observations','color','header','body','footer','status',
    ];
    
    protected $dates = ['created_at','updated_at'];

    const COLUMN_COMMENTS = [
        'curriculum_id' => 'Plan de Estudio',
        'code' => 'Código',
        'code_sm' => 'Código abreviado',
        'name' => 'Nombre',
        'description' => 'Descripción',
        'observations' => 'Observaciones',
        'color' => 'Color',
        'header' => 'Header',
        'body' => 'Cuerpo',
        'footer' => 'Pie de Página',
        'status'=>'Estado',
    ];
    
    public function getFullNameAttribute()
    {
        return "{$this->code} {$this->name}";
    }

    public static function levels_list() 
    {
        return Level::pluck('name','id');
    }

}
