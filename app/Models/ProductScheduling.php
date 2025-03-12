<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductScheduling extends Model
{
    use HasFactory;
    protected $table = 'product_schedulings';
    protected $fillable = ['nama', 'isi', 'bahasa_id'];
}
