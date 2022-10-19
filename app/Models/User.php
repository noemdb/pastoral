<?php

namespace App\Models;

use App\Models\app\Setup\User\TraitsUserRelations;
use App\Models\sys\Rol;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use TraitsUserRelations;

    const COLUMN_COMMENTS = [
        'id' =>'id',
        'name' =>'Nombre de usuario',
        'email' =>'email',
        'email_verified_at'=>'email_verified_at',
        'password'=>'password',
        'current_team_id'=>'Equipo',
        'profile_photo_path'=>'profile_photo_path',
        'status'=>'status',
        'last_login_at'=>'last_login_at',
        'last_loginout_at'=>'last_loginout_at',
        'last_login_ip'=>'last_login_ip',
        'work_id'=>'work_id',
        'card_id'=>'card_id',
        'biometric_id'=>'biometric_id',
        'role'=>'Rol',
        'phone'=>'Teléfono',
    ]; // 'name','email','email_verified_at','password','current_team_id','profile_photo_path','status','last_login_at','last_loginout_at','last_login_ip','work_id','card_id','biometric_id'
    
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password','current_team_id','profile_photo_path','status','last_login_at','last_loginout_at','last_login_ip','work_id','card_id','biometric_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function setPasswordAttribute($value){
        if (! empty($value)) {
            $this->attributes['password'] = bcrypt($value);
        }
    }

    public function profile()
    {
        return $this->hasOne('App\Models\sys\Profile');
    }

    public function rols()
    {
        return $this->hasMany('App\Models\sys\Rol');
    }

    public function getRolAttribute()
    {
        $fecha = Carbon::now();
        $rol = Rol::Where('user_id',$this->id)->Where('ffinal','>=',$fecha)->Where('finicial','<=',$fecha)->first(); //dd($rol);
        return $rol;
    }

    public function getAreaAttribute()
    {
        return ($this->rol) ? $this->rol->area : null ;

    }

    public function getRolNameAttribute()
    {
        return ($this->rol) ? $this->rol->rol : null ;

    }

    public function getFullRolAttribute()
    {
        return ($this->rol) ?  $this->rol->area . ' - ' . $this->rol->rol : null ;

    }

    public function hasRole()
    {
        return ($this->rol) ? true:false;
    }

    //is admin
    public function isAdmin()
    {
        if ($this->is_active == 'disable') return false;
        $fecha = Carbon::now();
        $is_admin = $this->rols->whereIn('area', ['SISTEMA'])->Where('finicial', '<=', $fecha)->Where('ffinal', '>=', $fecha)->count();
        if($is_admin>0){return true;}
        else{return false;}
    }

    public function IsPresident()
    {
        if ($this->is_active == 'disable') return false;
        $fecha = Carbon::now();
        $IsExpediente = $this->rols
                ->whereIn('area', ['SISTEMA','ADMINISTRACION'])
                ->whereIn('rol', ['ADMINISTRADOR','DIRECTOR','COORDINADOR','ASISTENTE'])
                ->Where('finicial', '<=', $fecha)
                ->Where('ffinal', '>=', $fecha)
                ->count();
        if($IsExpediente>0){return true;}
        else{return false;}
    }
}
