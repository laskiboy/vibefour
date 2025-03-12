<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advantages extends Model
{
    protected $fillable = ['nama', 'isi', 'bahasa_id'];
}
