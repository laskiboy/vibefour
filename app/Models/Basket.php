<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;
    protected $fillable = ['rate_id']; // Changed from rating_id to rate_id

    public function rate() // Changed method name from rating to rate
    {
        return $this->belongsTo(Rate::class, 'rate_id'); // Changed foreign key from rating_id to rate_id
    }
}
