<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nama',
        'username',
        'email',
        'password',
        'role_id',
        'otp',
        'otp_expires_at',
        'otp_attempts',
        'otp_last_attempts'
    ];

    // Perbaiki relasi ini
    public function rates()
    {
        return $this->hasMany(Rate::class, 'user_id');
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
