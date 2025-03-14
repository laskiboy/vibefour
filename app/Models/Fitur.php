<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    use HasFactory;
    protected $table = 'fiturs';
    protected $fillable = ['fitur'];

    public function prices()
    {
        return $this->belongsToMany(Prices::class, 'packages', 'feature_id', 'price_id')
            ->withPivot('bahasa_id');
    }
}
