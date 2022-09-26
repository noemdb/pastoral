<?php
namespace App\Models\app\Pescolar\Traits\Curriculum;

trait CurriculumRelations {

    public function pescolar()
    {
        return $this->belongsTo('App\Models\app\Pescolar');
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