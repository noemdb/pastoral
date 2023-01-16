<?php

namespace App\Models\app\Pescolar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charisma extends Model
{
    use HasFactory;

    public function lapses()
    {
        return $this->hasMany(Lapse::class);
    }

    public static function charismas_list()
    {
        return Charisma::pluck('name','id');
    }
}
