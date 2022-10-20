<?php

namespace App\Models;

use App\Models\sys\Extension\User\TraitsMiddleware;
use App\Models\sys\Extension\User\TraitsPastoral;
use App\Models\sys\Extension\User\TraitsRelations;
use App\Models\sys\Extension\User\TraitsRols;
use App\Models\sys\Extension\User\TraitsSetAttribute;
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
    
    //traits
    use TraitsRelations;
    use TraitsMiddleware;
    use TraitsRols;
    use TraitsSetAttribute;
    use TraitsPastoral;

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
        'rol'=>'Rol',
        'phone'=>'Teléfono',
    ];
    
    
    
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
}
