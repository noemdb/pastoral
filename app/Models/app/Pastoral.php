<?php

namespace App\Models\app;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\app\Pescolar\Curriculum;

use Carbon\Carbon;

class Pastoral extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','legalname','code','code_official','code_private','description','observations','color','header','body','footer','rif_institution','phone','address','city','state','state_code','country','email_institution','password','txt_contract_study'
    ];

    const COLUMN_COMMENTS = [
        'legalname' => 'Nombre Legal',
        'name'=>'Nombres',
    ];


    public function curriculum_list() /* usada para llenar los objetos de formularios select*/
    {
    	$list = Curriculum::select('curricula.*')
            ->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
            ->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id')
            ->Where('pastorals.id', '=', $this->id)
            ->where('pescolars.finicial',Carbon::now()->startOfYear())
            ->where('pescolars.ffinal',Carbon::now()->endOfYear())
            ->pluck('name','id');
        return $list;
    }
}
