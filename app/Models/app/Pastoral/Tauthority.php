<?php

namespace App\Models\app\Pastoral;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tauthority extends Model
{
    use HasFactory;

	public static function tauthority_list() 
	{
		return Tauthority::pluck('name','id');
	}
}
