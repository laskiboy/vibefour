<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpVerification extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'otp_code',
        'expires_at',
        'resend_count',
        'last_resent_at',
        'verified'
    ];

    protected $casts = [
        'expires_at' => 'datetime',
        'last_resent_at' => 'datetime',
        'verified' => 'boolean',
    ];
}
