<?php

namespace App\Models\app\Estudiant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tinscription extends Model
{
    use HasFactory;


    public static function tinscription_list() 
    {
        return Tinscription::pluck('name','id');
    }
}
