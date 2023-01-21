<?php

namespace App\Models\app\Word;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public static function listStatesCountryId($country_id)
	{
		return State::where('country_id',$country_id)->orderBy('name')->pluck('name','id')->toArray();
	}
}
