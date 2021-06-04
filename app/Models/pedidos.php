<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'ID', 
        'FECHAEMISION',
        'FECHAENTREGA',
        'NOMBRECLI',
        'VENDEDOR',
        'DESCRIPCION',
        'COBERTURA',
        'DESCRIPASTEL',
        'CANTIDADPORPAS',
        'PRECIOPORCION',
        'PRECIOTOTAL',
        'DESCRIRELLENO',
        'CANTPORCRELLE',
        'PRECIORELLENO',
        'DESCRIFRUTA',
        'GRAMOS',
        'PRECIOFRUTA',
        'TIPOINSUMO',
        'INSUMO',
        'CANTINSUMO',
        'PRECIOINSUMO',
        'PRECIOUNINSUMO',
        'PRECIOPRODUCCION',
        'PORGANANCIA',
        'GANANCIA',
        'PRECIOFINAL',
        'PORCESETENTACINCO',
        'PORCEVEINTECINCO',
        'updated_at',
        'created_at'
    ];
}
