<?php

namespace App\Models\app\Pescolar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use App\Models\app\Pescolar\Traits\Pensum\PensumRelations;

class Pensum extends Model
{
    use HasFactory;

    use PensumRelations;

    protected $fillable = [
        'level_id','course_id','order','hour_t_week','hour_p_week','unid_credit','approved_credit_unir','enable_academic_index',
    ];
    
    protected $dates = ['created_at','updated_at'];

    const COLUMN_COMMENTS = [
        'level_id' =>'Nivel',
        'course_id' =>'Asignatura de Formación',
        'order' =>'Orden',
        'hour_t_week' =>'Horas teóricas',
        'hour_p_week' =>'Horas prácticas',
        'unid_credit' =>'Unidades de Créditos',
        'approved_credit_unir' =>'Unidades de Créditos aprobadas',
        'enable_academic_index'=>'Afecta índice',
        'name'=>'Nombre',
        'location'=>'Pertenencia',
    ];
    
    public function getFullNameAttribute()
    {
        $code = ($this->course) ? $this->course->code : null ;
        $name = ($this->course) ? $this->course->name : null ;
        return "{$code} {$name}";
    }

    public function getNameAttribute()
    {
        $code = ($this->course) ? $this->course->code : null ;
        $name = ($this->course) ? $this->course->name : null ;
        return "{$code} {$name}";
    }

    public static function pensums_list() 
    {
        $pensums = Pensum::select('pensums.*',DB::raw('courses.code || " - " || courses.name as name' ))
            ->join('levels', 'levels.id', '=', 'pensums.level_id')
            ->join('courses', 'courses.id', '=', 'pensums.course_id')
            ->pluck('name','id');
        return $pensums;
    }
}

/*

'level_id','course_id','order','hour_t_week','hour_p_week','unid_credit','approved_credit_unir','enable_academic_index',

level_id
course_id
order
hour_t_week
hour_p_week
unid_credit
approved_credit_unir
enable_academic_index

*/

?>

