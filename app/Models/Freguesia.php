<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freguesia extends Model
{
    use HasFactory;
    protected $table = 'freguesias';
    protected $fillable = [
        'freguesia',
        'id_municipio',
    ];
}
