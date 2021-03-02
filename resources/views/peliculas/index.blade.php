@extends('layouts.app') <!--importo el layout-->


@section('content')

<h1>Todas las Peliculas</h1>

@if(count($peliculas) >0) <!--si tengo cargadas peliculas-->
    @foreach($peliculas as $pelicula)
        <div class="card">
            <h3><a href="/peliculas/{{$pelicula->id}}">{{$pelicula->titulo}}</a></h3>
            <h3>{{$pelicula->titulo}}</h3>
            <h3>{{$pelicula->anio}}</h3>
            <h3>{{$pelicula->director}}</h3>
            <h3>{{$pelicula->genero}}</h3>


        </div>
    @endforeach
@endif
@endsection