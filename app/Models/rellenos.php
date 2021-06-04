<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rellenos extends Model
{
    protected $table = 'rellenos';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'ID', 
        'Descripción', 
        'PrecioPorción10', 
        'PrecioPorción15',
        'PrecioPorción20'
    ];
}
