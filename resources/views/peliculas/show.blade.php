@extends('layouts.app') <!--importo el layout-->


@section('content')

<h1>Pelicula:</h1>


<h3>Pelicula {{$pelicula->titulo}}</h3>

<!--Solo si el usuario esta logueado y es el creador  va a poder editar o eliminar-->
@if(!Auth::guest()) <!--en el caso de que este logueado le mostramos edit/delete-->
    @if(Auth::user()->id == $pelicula->user_id) <!--si el usuario logueado es el autor de la publicacion de la pelicula-->
        <button class="btn btn-primary"><a href="/peliculas/{{$pelicula->id}}/edit" class="btn btn-primary">Editar Pelicula</a></button>

        {!! Form::open(['action' => ['App\Http\Controllers\PeliculasController@destroy', $pelicula->id], 'method'=>'DELETE']) !!} <!--Procesa el form el metodo store-->
        
            {{form::submit("Eliminar Pelicula", ["class"=>"btn btn-danger"])}}

        {!! Form::close() !!}
    @endif
@endif

@endsection