<!DOCTYPE html>
<html>
    <head>
        <title>Pelicula detallada</title>
    </head>
    <body>
        @extends('layouts.master')
        @section('content')
        <div class="row">
			<div class="col-sm-4">
				<br><img src="{{$idpage->poster}}"/>
			</div>
			<div class="col-sm-8">
				<h3>{{$idpage->title}}</h3>
                <h4>Año: {{$idpage->year}}</h4>
                <h4>Director: {{$idpage->director}}</h4>
                <h5><b>Resumen:</b>{{$idpage->synopsis}}</h5>
                <h5><b>Estado:</b> 
                    @if($idpage->rented == true)
                        Pelicula actualmente alquilada</h5><br>
                            <button class="btn btn-danger"> Devolver película</button>
                    @else
                            Película disponible para alquilar</h5><br>
                            <button class="btn btn-primary">Alquilar pelicula</button>
                    @endif
                    <a href="{{url('catalog/edit/'.$idpage->id)}}" class="btn btn-warning">Editar película</a>
                    <button class="btn btn-link">Volver atrás</button>
                       

			</div>
		</div>
        @stop
        

    </body>
</html>