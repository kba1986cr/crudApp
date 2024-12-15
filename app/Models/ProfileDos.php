<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileDos extends Model
{
    //
    use HasFactory;

    // Permitimos que todos los campos sean asignables masivamente
    protected $fillable = ['message'];
}
