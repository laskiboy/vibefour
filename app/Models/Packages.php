<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    protected $fillable = [
        'price_id',
        'feature_id',
        'bahasa_id'
    ];

    public function features()
    {
        return $this->belongsTo(Fitur::class, 'feature_id');
    }


    public function price()
    {
        return $this->belongsTo(Prices::class, 'price_id');
    }
}
