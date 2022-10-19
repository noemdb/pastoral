<?php

namespace App\Models;

use App\Models\app\Setup\User\TraitsUserRelations;
use App\Models\sys\Profile;
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
        return $this->hasOne(Profile::class);
    }

    public function role()
    {
        return $this->hasOne(Rol::class);
    }

    public function getRolAttribute()
    {
        return Rol::Where('user_id',$this->id)->Where('ffinal','>=',Carbon::now())->Where('finicial','<=',Carbon::now())->first();
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
    public function getCompleteRolAttribute()
    {
        return ($this->rol) ?  $this->rol->pastoral->code . ' - ' . $this->rol->area . ' - ' . $this->rol->rol : null ;

    }

    public function hasRole()
    {
        return ($this->rol) ? true:false;
    }

    //is admin
    public function isAdmin()
    {
        if ($this->status) {
            $now = Carbon::now()->format('Ymd'); //dd($now);
            $rol = Rol::Where('rols.user_id',$this->id)->where('rols.ffinal','<=','20221019')->first(); dd($rol);
            $rol = Rol::first();
            if ($rol->ffinal >= $now) dd('true');
            if ($this->rol) {                
                $count = $this->rol->whereIn('area', ['SISTEMA'])->whereIn('rol', ['ADMINISTRADOR'])->count();
                return ($count > 0) ? true:false;
            }
        }
    }

    //is is_director
    public function IsDirector()
    {
        if ($this->status) {
            $count = $this->rol->whereIn('area', ['SISTEMA','DIRECCIÓN'])->whereIn('rol', ['ADMINISTRADOR','DIRECTOR'])->count();
            return ($count > 0) ? true:false;
        }
    }
}
