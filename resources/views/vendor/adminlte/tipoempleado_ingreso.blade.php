@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Home</div> -->

					<div class="panel-body">
						<div class="box box-warning">
	                        <div class="box-header with-border">
	                           <center><h3 class="box-title">FORMULARIO DE REGISTRO DE TIPO_EMPLEADO</h3></center>
	                        </div>
	                        <!-- /.box-header -->
	                        <div class="box-body">
	                            <form id="ff" role="form" method="post" action="{{url('/tipoempleado')}}">
	                            	
	                                @csrf
	                                
	                                <!-- text input -->
	                                <div class="form-group">
	                                    <label>Tipo de Empleo</label>
	                                    <input name="descripcion" type="text" class="form-control" placeholder="Ingrese Descripcion de Empleo" autocomplete="off">
	                                </div>
	<center><button type="submit" id="enviar" class="btn btn-success" onclick="swal('Tipo_Empleado Guardado!', 'Correctamente!', 'success');">Guardar</button></center>


	                            </form>
	                        </div>
	                        <!-- /.box-body -->
	                    </div>
                        <div class="box box-warning">
                        <table class="table table-bordereds">
                        <thead>
                            <tr>
                                
                                <th scope="col">Tipo_Empleado</th>
                                
                            </tr>
                        </thead>
                        <tbody id="datos">
                            @foreach($datos as $item)
                                <tr>
                                    <td>{{$item->descripcion}}</td>
                                    
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