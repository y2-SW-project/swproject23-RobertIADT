<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // array where we specify which properties are mass assignable
    protected $fillable = [
    'name',
    'detail'       
    ];
}
