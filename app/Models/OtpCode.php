<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpCode extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'otp', 'expires_at', 'attempts', 'type'];
    protected $dates = ['expires_at'];

    public function isExpired()
    {
        return Carbon::now()->gt($this->expires_at);
    }
}
