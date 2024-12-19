<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class TestController extends Controller
{

    public function __construct() {
       $this->middleware('auth')->only(['Demo']); //Solo aplica el middleware al método demo
       $this->middleware('auth'); //Aplica el middleware a todos los métodos de la clase
       $this->middleware('admin')->only('Private');
        $this->middleware('auth')->except(['Test']); //aplica el middleware a todos excepto a los del array
    }


    public function Test() {
        return view('Test');
    }

    public function Privated() {
        return view('Privated');
    }

  public function Demo() {
    return view('demo');
  }  

}
