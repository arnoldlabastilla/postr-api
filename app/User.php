<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $fillable = [
        'name', 'email', 'password', 'type',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * RELATIONSHIPS
     */
    public function endpoints()
    {
        return $this->hasMany(Endpoint::class);
    }

    /**
     * ATTRIBUTES
     */
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    /**
     * METHODS
     */
    public function getAccessTokenName($request)
    {
        return Str::slug($request->headers->get('Origin') . ' ' . $this->email, '-');
    }
}
