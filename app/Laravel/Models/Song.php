<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title','artist','lyrics'];
}
