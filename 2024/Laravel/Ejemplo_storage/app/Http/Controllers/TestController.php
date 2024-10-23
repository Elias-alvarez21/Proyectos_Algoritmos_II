<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class TestController extends Controller
{

    public function __construct() {
       //$this->middleware('auth')->only(['Test']);
       $this->middleware('auth');
      $this->middleware('admin')->only('Privated');

        //$this->middleware('auth')->except(['Test']);
    }


    public function Test() {
        return view('Test');
    }

    public function Privated() {
        return view('Privated');
    }

    

}
