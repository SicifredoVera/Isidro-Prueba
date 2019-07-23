@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						<div class="box box-warning">
                        <div class="box-header with-border">
                           <center><h3 class="box-title">FORMULARIO DE REGISTRO DE EMPLEADOS</h3></center>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form" id="fff" method="post" action="{{url('/empleado')}}">
                                @csrf
                                
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input name="nombre" type="text" class="form-control" placeholder="Ingrese Nombre" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input name="apellido" type="text" class="form-control" placeholder="Ingrese Apellido" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Cedula</label>
                                    <input name="cedula" type="text" class="form-control" placeholder="Ingrese Cedula" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Tipo Empleado</label>
                                    <!-- <input name="nivel" type="text" class="form-control" placeholder="ingrese Nivel"> -->
                                    <select class="combobox form-control" name="tipoempleado">
                                        <option value="" selected="selected">Seleccione:</option>
                                        @foreach($datos1 as $item)
                                        <option value="{{$item->id}}">{{$item->descripcion}}</option>
                                        @endforeach
                                    </select>
                                </div>
                <center><button type="submit" id="enviar1" class="btn btn-success" onclick="swal('Empleado Guardado!', 'Correctamente!', 'success');">Guardar</button></center> 

                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="box box-warning">
                        <table class="table table-bordereds">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Cedula</th>
                                <th scope="col">Tipo_Empleado</th>
                                
                            </tr>
                        </thead>
                        <tbody id="datos1">
                            @foreach($datos as $item)
                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->apellido}}</td>
                                    <td>{{$item->cedula}}</td>
                                    @foreach($datos1 as $item1)
                                        @if($item->tipoempleadoid == $item1->id)
                                            <td>{{$item1->descripcion}}</td>
                                        @endif
                                    @endforeach
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection