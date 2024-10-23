<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUSerController extends Controller
{
 public function __construct()
 {
    $this->middleware('auth')->except("Administrador");//que entre a todos los metodos menos al Administrador
}

}
