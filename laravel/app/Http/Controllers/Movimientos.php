<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movimientos extends Controller
{
    //obtener movimientos
    public function obtenerMovimientos(){
        return "Hola mundo";
        // $movimientos = \App\Models\Movimientos::all();
        // return $movimientos;
    }
}
