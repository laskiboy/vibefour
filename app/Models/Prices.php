<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'harga', 'durasi'];
    public function features()
    {
        return $this->belongsToMany(Fitur::class, 'packages', 'price_id', 'feature_id')
            ->withPivot('bahasa_id'); // Supaya bisa ambil bahasa_id dari pivot
    }
}
