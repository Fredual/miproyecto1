<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    //
    public function vb(){
        return view('vista');
    }

    public function vista1(){
        return view('vista1');
    }
    public function vista2(){
        return view('vista2');
    }

    public function salir(){
        return "Salir";
    }
    
    public function saludo($nombre,$diast){
        //return view('empleado',['nombre'=>$nombre,'diast'=>$diast]);
        $pago = 100;
        $nomina = $diast*$pago;
        return view('empleado',compact('nombre','diast','nomina'));
        /*   return view('empleado')
            ->with('nombre',$nombre)
            ->with('diast',$diast);*/
    }

    public  function mensaje(){
        return "Hola trabajador";
    }

    public function pago(){
        $dias = 7;
        $pago = 600;
        $nomina = $dias*$pago;
        return "El pago del empleado es $nomina";
    }

    public function nomina($diast,$pago){
        $nomina = $diast * $pago;
        dd($nomina);
        return "El pago es $nomina con dias $diast y pago diario de $pago";
    }
}
