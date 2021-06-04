<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insumos extends Model
{
    protected $table = 'insumos';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'ID', 
        'Tipo', 
        'Cantidad', 
        'Insumos',
        'Precio',
        'Unitario'
    ];
}
