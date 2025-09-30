<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    // Agregá aquí los campos de tu formulario
    protected $fillable = [
        'name',
        'email',
        'password'        
    ];
}
