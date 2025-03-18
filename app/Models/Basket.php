<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;
    protected $fillable = ['rating_id'];

    public function rating()
    {
        return $this->belongsTo(Rate::class, 'rating_id');
    }
}
