<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class frutas extends Model
{
    protected $table = 'frutas';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'ID', 
        'Descripción', 
        'Gramos', 
        'Precio'
    ];
}
