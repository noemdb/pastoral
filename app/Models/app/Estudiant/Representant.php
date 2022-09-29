<?php

namespace App\Models\app\Estudiant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','citype_id','ci','name','phone','email','whatsapp','telegram','twitter','instagram','status_adviders',
    ];

    const COLUMN_COMMENTS = [
        'user_id' => 'user_id',
        'citype_id' => 'citype_id',
        'ci' => 'ci',
        'name'=>'ciname',
        'phone'=>'phone',
        'email'=>'email',
        'whatsapp'=>'whatsapp',
        'telegram'=>'telegram',
        'twitter'=>'twitter',
        'instagram'=>'instagram',
        'status_adviders'=>'status_adviders',
    ];


    public static function representant_list() 
    {
        $representants = Representant::select('representants.id')
            ->SelectRaw(' representants.ci  ||  representants.name as name ')
            ->pluck('name','id');
        return $representants;
    }

}

/*

'user_id','citype_id','ci','name','phone','email','whatsapp','telegram','twitter','instagram','status_adviders',

user_id
citype_id
ci
name
phone
email
whatsapp
telegram
twitter
instagram
status_adviders

user_id
citype_id
ci
name
phone
email
whatsapp
telegram
twitter
instagram
status_adviders
*/