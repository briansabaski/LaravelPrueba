<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
   public function index() {
    return view('prueba');
   }

   public function crear(){
    echo "Formulario para crear ";
   }
}
