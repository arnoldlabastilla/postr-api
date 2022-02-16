<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
=======
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
<<<<<<< HEAD
    use HasApiTokens, HasFactory, Notifiable;
=======
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var array
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
<<<<<<< HEAD
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
=======
     * The attributes that should be hidden for arrays.
     *
     * @var array
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
     */
    protected $hidden = [
        'password',
        'remember_token',
<<<<<<< HEAD
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
=======
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD
=======

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
>>>>>>> 19e73e9a72622cae573afb3159f69c8cdd158fc3
}
