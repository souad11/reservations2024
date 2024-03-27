<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;
    
    protected $fillable = ['slug', 'title', 'description', 'poster_url'];

    protected $table = 'shows';

    public $timestamps = true;
}

