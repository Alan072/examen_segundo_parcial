@extends ('plantilla')
@section ('contenido')

<h1 class="mt-4 display-1 text-center">Recuerdos</h1>

<h2> Bienvenido a recuerdo con Blade {{$nombre}}</h2> 

<ul>
    @foreach($arrnombres as $llaves)
    <li>{{$llaves}}</li>
    @endforeach
</ul>

@stop