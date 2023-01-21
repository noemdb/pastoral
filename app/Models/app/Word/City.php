<?php

namespace App\Models\app\Word;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public static function listCitiesStateId($state_id)
	{
		return City::where('state_id',$state_id)->orderBy('name')->pluck('name','id')->toArray();
	}
}
