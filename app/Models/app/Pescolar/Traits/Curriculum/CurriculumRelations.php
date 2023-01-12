<?php
namespace App\Models\app\Pescolar\Traits\Curriculum;

use App\Models\app\Pescolar\Lapse;

trait CurriculumRelations {

    public function pescolar()
    {
        return $this->belongsTo('App\Models\app\Pescolar');
    }
    public function lapses()
    {
        return $this->hasMany(Lapse::class);
    }
    ///////////////////////////////////////////////////////////////////////////////////
}



/*

'pescolar_id','code','name','order','capacity','description','observations','status_build_promotion','title','profile','status','color','header','body','footer',


'pescolar_id',
'code',
'name',
'order',
'capacity',
'description',
'observations',
'status_build_promotion',
'title',
'profile',
'status',
'color',
'header',
'body',
'footer',

*/
