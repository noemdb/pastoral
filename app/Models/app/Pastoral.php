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
        'name', 'legalname', 'code', 'code_official', 'code_private', 'description', 'observations', 'header', 'body', 'footer', 'rif_institution', 'phone', 'address', 'city', 'state_code', 'country', 'email_institution', 'password', 'txt_contract_study'
    ];

    protected $dates = ['finicial','ffinal','created_at','updated_at'];


    const COLUMN_COMMENTS = [
        'name' => 'Nombre',
        'code' => 'Código',
        'legalname' => 'Nombre Legal',
        'description'=>'Descripción',
        'observations'=>'Observaciones',
        'code_official'=>'COD Oficial',
        'code_private'=>'COD privado',
        'header'=>'Encabezado HTML',
        'body'=>'Cuerpo HTML',
        'footer'=>'Pie de página HTML',
        'rif_institution'=>'RIF',
        'phone'=>'Teléfono',
        'address'=>'Dirección',
        'city'=>'Ciudad',
        'state_code'=>'COD Postal',
        'country'=>'País',
        'email_institution'=>'Correo Electrónico',
        'password'=>'Contraseña',
        'txt_contract_study'=>'Contrato de Estudio',
        ////////////////////////////////////////////////
        'count_pescolars'=>'N. de Períodos',
    ];

    public function pescolars()
    {
        return $this->hasMany(Pescolar::class);
    }

    public static function pastorals_list()
    {
        return Pastoral::pluck('name','id');
    }

    public function pescolars_list()
    {
        return $this->pescolars->pluck('name','id');
    }

    public function pescolars_full_list()
    {
        $pescolars = Pastoral::select('pescolars.id')
            ->SelectRaw(' pescolars.name  || " [" || pescolars.finicial || " - " || pescolars.ffinal || "]" as name ')
            ->join('pescolars', 'pastorals.id', '=', 'pescolars.pastoral_id')
            ->where('pastorals.id',$this->id)
            ->pluck('name','id');
        return $pescolars;
    }

    public function curriculum_list() /* usada para llenar los objetos de formularios select*/
    {
        $list = Curriculum::select('curricula.*')
            ->join('pescolars', 'pescolars.id', '=', 'curricula.pescolar_id')
            ->join('pastorals', 'pastorals.id', '=', 'pescolars.pastoral_id')
            ->Where('pastorals.id', '=', $this->id)
            // ->where('pescolars.finicial','>=',Carbon::now()->startOfYear())
            // ->where('pescolars.ffinal','>=',Carbon::now()->endOfYear())
            ->pluck('name','id');
        return $list;
    }

    public function getStatusDeleteAttribute()
    {
        return $this->pescolars->isEmpty();
    }
}
