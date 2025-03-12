<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProducVoting extends Model
{
    use HasFactory;
    protected $table = 'product_votings';
    protected $fillable = ['nama', 'isi', 'bahasa_id'];
}
