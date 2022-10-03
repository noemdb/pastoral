<?php

namespace App\Models\app\Pescolar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Pescolar\Traits\Course\CourseRelations;

use Illuminate\Support\Facades\DB;

class Course extends Model
{
    use HasFactory;

    use CourseRelations;

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
        'header'=>'Tìtulo',
        'body'=>'Cuerpo',
        'footer'=>'Pie de página',
        'status'=>'Estado',
    ];
    
    public function getFullNameAttribute()
    {
        return "{$this->code} {$this->name}";
    }

    public static function courses_list() 
    {
        return Course::pluck('name','id');
    }

    public static function coursesLevelId_list($level_id) 
    {
        $level = Level::find($level_id);
        $courses_list = ($level) ? Course::select('courses.id',DB::raw('courses.code || " - " || courses.name as name' ))->where('curriculum_id',$level->curriculum_id)->pluck('name','id') :  collect(); //dd($level_id,$level);
        return $courses_list;
    }
    
}

/*

'curriculum_id','code','code_sm','name','description','observations','color','header','body','footer','status',

curriculum_id
code
code_sm
name
description
observations
color
header
body
footer
status

curriculum_id
code
code_sm
name
description
observations
color
header
body
footer
status

*/