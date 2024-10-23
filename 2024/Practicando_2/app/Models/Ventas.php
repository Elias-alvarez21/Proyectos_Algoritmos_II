<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    /** @use HasFactory<\Database\Factories\VentasFactory> */
    use HasFactory;
    protected $primaryKey = 'ventaId';
}
