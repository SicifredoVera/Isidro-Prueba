@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Modificars</div> -->

					<div class="panel-body" style="color:#D39604">
						<div class="box box-warning">
                        <div class="box-header with-border">
                            <center><h1 class="box-title" style="color:#172681">Formulario de Modificación de Empleado</h1></center>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form" method="post" action="{{url('empleado_actualizar',$datos->id)}}">
                                @method('PUT')
                                @csrf
                                
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input value="{{$datos->nombre}}" name="nombre" type="text" class="form-control" placeholder="ingrese nombre">
                                </div>
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input value="{{$datos->apellido}}" name="apellido" type="text" class="form-control" placeholder="ingrese  apellido">
                                </div>
                                <div class="form-group">
                                    <label>Cedula</label>
                                    <input value="{{$datos->cedula}}" name="cedula" type="text" class="form-control" placeholder="ingrese cedula">
                                </div>
                                <div class="form-group">
                                    <label>Tipo-Empleado</label>
                                    <!-- <input name="nivel" type="text" class="form-control" placeholder="ingrese Nivel"> -->
                                    <select class="combobox form-control" name="tipoempleado">
                                        @foreach($datos1 as $item)
                                        @if($item->id == $datos->nivelid)
                                        <option value="{{$datos->nivelid}}" selected="selected">{{$item->descripcion}}</option>
                                        @endif
                                        @endforeach
                                        @foreach($datos1 as $item)
                                        @if($item->id != $datos->nivelid)
                                        <option value="{{$item->id}}">{{$item->descripcion}}</option>
                                         @endif
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" id="" class="btn btn-success" onclick="swal('Empleado Modificado!', 'Correctamente!', 'success');">Modificar</button>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection