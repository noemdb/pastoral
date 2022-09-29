<?php

namespace App\Models\app\Estudiant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citype extends Model
{
    use HasFactory;

    public static function citype_list() 
    {
        $citypes = Citype::select('citypes.id','citypes.name')
            ->pluck('name','id');
        return $citypes;
    }
}
