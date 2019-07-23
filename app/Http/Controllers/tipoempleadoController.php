<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipoempleado;

class tipoempleadoController extends Controller
{
    public function ventana()
	{
         $consulta = Tipoempleado::all();
		return view('adminlte::tipoempleado_ingreso')->with('datos',$consulta);
	}
	public function guardar(Request $request){
	    if($request->ajax()){
		    $nivel = new Tipoempleado();
		    
		    $nivel->descripcion = $request->descripcion;
		   

		    $nivel->save();
		    //dd($nivel->descripcion);
		    
		    // return view('adminlte::tipoempleado_ingreso');
		    return response()->json(['mensaje'=> 'Datos Correctos']);
		}
	    
	}
	public function listar(){
	    $consulta = Tipoempleado::all();
	    return view('adminlte::tipoempleado_listar')->with('datos',$consulta);
	}
	public function eliminar($id)
	{
		$consulta = Tipoempleado::findOrFail($id);

		$consulta->delete();

		$consulta = Tipoempleado::all();
	    return view('adminlte::tipoempleado_listar')->with('datos',$consulta);
	}
	public function editar($id)
	{
		$consulta = Tipoempleado::findOrFail($id);

		 return view('adminlte::tipoempleado_modificar')->with('datos',$consulta);

	}
	public function modificar(Request $request, $id)
	{
		$consulta = Tipoempleado::findOrFail($id);

		$consulta->descripcion = $request->descripcion;

		$consulta->save();
		return redirect('tipoempleado/eliminar_modificar');
	}
}
