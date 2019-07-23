<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Tipoempleado;

class empleadoController extends Controller
{
    public function ventana()
	{
		$consulta =Empleado::all(); 
        $datos1=Tipoempleado::all();
		return view('adminlte::empleado_ingreso', compact('datos1', $datos1))->with('datos',$consulta);
	}

    public function guardar(Request $request){
      if($request->ajax()){
    	$consulta = Tipoempleado::all();
    	$empleado = new Empleado();
	    
	    $empleado->nombre = $request->nombre;
	    $empleado->apellido = $request->apellido;
	    $empleado->cedula = $request->cedula;
	    $empleado->tipoempleadoid = $request->post("tipoempleado");

	    $empleado->save();
	    
	    // return view('adminlte::empleado_ingreso')->with('datos',$consulta);
        // 
        return response()->json(['mensaje'=> 'Datos Correctos']);
        }
	}
	public function listar(){
		$consulta = Empleado::all();
		$datos1 = Tipoempleado::all();
		
	    return view('adminlte::empleado_listar', compact('datos1', $datos1))->with('datos',$consulta);
	}
	public function eliminar($id)
	{
		$consulta1 = Empleado::findOrFail($id);
		$consulta1->delete();


		$consulta = Empleado::all();
		$datos1 = Tipoempleado::all();		
        return view('adminlte::empleado_listar', compact('datos1', $datos1))->with('datos',$consulta);
	}
	public function editar($id)
	{
		$consulta = Empleado::findOrFail($id);
		$datos1 = Tipoempleado::all();
		 return view('adminlte::empleado_modificar', compact('datos1', $datos1))->with('datos',$consulta);

	}
	public function modificar(Request $request, $id)
	{
		$consulta = Empleado::findOrFail($id);

		$consulta->nombre = $request->nombre;
		$consulta->apellido = $request->apellido;
		$consulta->cedula = $request->cedula;
		$consulta->tipoempleadoid = $request->post("tipoempleado");

		$consulta->save();
		return redirect('empleado/eliminar_modificar');
	}
}
