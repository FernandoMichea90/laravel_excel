<?php

namespace App\Http\Controllers;
use App\Models\Movimientos;
use Illuminate\Http\Request;

class MovimientosController extends Controller
{
    // primera funcion de prueba 

    public function get_movimientos(){
        $lista_movimientos = Movimientos::get();
        return $lista_movimientos;
    }   

    // funcion para buscar movimientos por id
    public function get_movimiento($id){
        $movimiento = Movimientos::find($id);
        return $movimiento;
    }

    // funcion para crear movimientos
    public function create_movimiento(Request $request){
        $movimiento = new Movimientos();
        $movimiento->descripcion = $request->descripcion;
        $movimiento->tipo = $request->tipo;
        $movimiento->monto = $request->monto;
        $movimiento->fecha = $request->fecha;
        $movimiento->categoria = $request->categoria;
        $movimiento->comentario = $request->comentario;
        $movimiento->user_id = $request->user_id;
        $movimiento->save();
        return $movimiento;
    }

    // funcion para actualizar movimientos
    public function update_movimiento(Request $request, $id){
        $movimiento = Movimientos::find($id);
        $movimiento->descripcion = $request->descripcion;
        $movimiento->tipo = $request->tipo;
        $movimiento->monto = $request->monto;
        $movimiento->fecha = $request->fecha;
        $movimiento->categoria = $request->categoria;
        $movimiento->comentario = $request->comentario;
        $movimiento->user_id = $request->user_id;
        $movimiento->save();
        return $movimiento;
    }

    // funcion para eliminar movimientos
    public function delete_movimiento($id){
        $movimiento = Movimientos::find($id);
        $movimiento->delete();
        return $movimiento;
    }   

}
