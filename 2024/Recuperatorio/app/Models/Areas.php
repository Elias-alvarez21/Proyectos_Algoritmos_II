<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    /** @use HasFactory<\Database\Factories\AreasFactory> */
    use HasFactory;
    protected $primaryKey="AreasId";
}
