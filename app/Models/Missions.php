<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Missions extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'isi', 'bahasa_id'];
}
