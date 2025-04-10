<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $table = 'rates';

    protected $fillable = [
        'user_id',
        'rating',
        'pesan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function baskets() // Changed method name from rating to baskets and pluralized
    {
        return $this->hasMany(Basket::class, 'rate_id'); // Changed foreign key from rating_id to rate_id
    }
}
