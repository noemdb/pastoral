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
        /////////////////////////////
        'pevaluations_count'=>'N.P.Evaluación',
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
        $pensums = Pensum::select('pensums.id', DB::raw('courses.code || " - " || courses.name as course_name' ) )
            ->join('courses', 'courses.id', '=', 'pensums.course_id')
            ->pluck('course_name','id');
        return $pensums;
    }

    public function getCoursesListAttribute()
    {
        $list = Course::select('courses.id', DB::raw('courses.code || " - " || courses.name as course_name' ) )
            ->join('curriculum', 'curriculum.id', '=', 'courses.curriculum_id')
            ->join('lapses', 'curriculum.id', '=', 'lapses.curriculum_id')
            ->join('levels', 'lapses.id', '=', 'levels.lapse_id')
            ->join('pensums', 'levels.id', '=', 'pensums.level_id')
            ->where('pensums.id',$this->id)
            ->pluck('course_name','id');
        return $list;
    }

    public function getCoursesAttribute()
    {
        return Course::coursesLevelId_list($this->level_id);
    }

    public static function coursesSectionId_list($section_id)
    {
        return Course::coursesSectionId_list($section_id);
    }


    public function getStatusDeleteAttribute()
    {
        return $this->pevaluations->isEmpty();
    }

    public function getPevaluationsCountAttribute()
    {
        return $this->pevaluations->count();
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

