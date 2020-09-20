<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'referencia', 'producto', 'cantidad', 'precio_unitario', 'precio_total', 'acciones',
    ];
}
