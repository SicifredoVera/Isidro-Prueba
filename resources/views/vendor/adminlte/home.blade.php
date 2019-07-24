@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">

		<div class="row">
			<div class="col-md-12 col-md-offset-0" >
				<div class="panel panel-default">
                    <center><h1 style="color:#20513D">Compañia "Vera Morrillo"</h1></center>
                  <center>  <img style="border: green solid; border-width:2px; width: 1300px; height: 700px " src="{{asset('img/empleados.jpg')}}" alt="">
                    </center>
                    <br>	
            	
				</div>
			</div>
		</div>



	</div>
@endsection
