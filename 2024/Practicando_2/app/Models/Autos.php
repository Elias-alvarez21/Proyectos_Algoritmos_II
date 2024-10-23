<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    /** @use HasFactory<\Database\Factories\AutosFactory> */
    use HasFactory;
    protected $primaryKey ="autoId";
}
