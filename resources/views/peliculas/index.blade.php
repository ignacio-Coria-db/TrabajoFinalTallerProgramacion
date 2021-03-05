@extends('layouts.app') <!--importo el layout-->


@section('content')

<h1>Todas las Peliculas</h1>

@if(count($peliculas) >0) <!--si tengo cargadas peliculas-->
    @foreach($peliculas as $pelicula)
        <div class="card">
            <h3><a href="/peliculas/{{$pelicula->id}}">Titulo: {{$pelicula->titulo}}</a></h3>
            <h3>Año: {{$pelicula->anio}}</h3>
            <h3>Director: {{$pelicula->director_id}}</h3>
            <h3>Genero: {{$pelicula->genero_id}}</h3>


        </div>
    @endforeach
@endif
@endsection