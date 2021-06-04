<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasteles extends Model
{
    protected $table = 'pasteles';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'ID', 
        'Cobertura', 
        'Descripción', 
        'PrecioPorción10',
        'PrecioTotal10',
        'PrecioPorción15',
        'PrecioTotal15',
        'PrecioPorción20',
        'PrecioTotal20'
    ];
}
