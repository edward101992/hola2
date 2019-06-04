
@extends('layaout')
    @section('contenidoMain')
        <h1> {{ $title2 }} </h1>
        <hr>
        <ul>
        	@unless(empty($usuarios2))
	            @foreach ($usuarios2 as $usua2)
	                <li>{{ $usua2 }}</li>
	             @endforeach
            @else 
            	<li><p>No hay Usuarios</p></li>
			@endif
        </ul>
    @endsection