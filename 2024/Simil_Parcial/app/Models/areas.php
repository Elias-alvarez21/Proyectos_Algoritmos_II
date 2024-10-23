<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    /** @use HasFactory<\Database\Factories\AreasFactory> */
    use HasFactory;
    protected $primaryKery="area_Id";
}
