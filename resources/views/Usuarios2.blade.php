
@extends('layaout') <!-- Este es el layout.blade.php -->

    @section('contenidoMain') <!--contenidoMain es como nombre elmain dentro d layout.blade.php -->
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

    @section('sidebar')
    @parent <!-- ese parent es para usar la parte de sidebar y la de barra personalizada -->
            <h2>Barra personalizada Usuarios 2</h2>
    @endsection