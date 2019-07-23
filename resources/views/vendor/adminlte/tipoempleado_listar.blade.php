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
						<table class="table table-bordereds">
                        <thead> 
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Modificar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($datos as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>
                                    <a href="{{url('tipoempleado_editar', $item->id)}}" type="button" class="btn btn-block btn-success">Modificar</a></td>
                                <td>

                                    <form method="post" action="{{route('tipoempleado_eliminar',$item->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <!-- <input type="hidden" name="_mothod" value="delete"> -->
                                        <button type="submit" class="btn btn-block btn-danger" onclick="swal({
  title: 'Estás Seguro que deseas Eliminar?',
  text: 'Una vez eliminado, no podrás Recuperar la Información!',
  icon: 'warning',
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal('¡Tu Información ha sido Eliminado! '
, {
      icon: 'success',
    });
  } else {
    swal('Tu Información es Segura!');
  }
});">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection