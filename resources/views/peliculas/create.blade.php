@extends('layouts.app') <!--importo el layout-->

<!--js select actores-->
<script src="{{ asset('js/formCreate.js') }}" defer></script>
<!--css select actores-->
<link href="{{ asset('css/formCreate.css') }}" rel="stylesheet">

@section('content')

<h1>Cargar Pelicula</h1>


<!--FORMULARIO PARA CARGAR PELICULA-->


<form class="row g-3" action="/peliculas" method="POST" enctype="multipart/form-data">
  <div class="col-md-12">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" name="titulo" required>
  </div>

  <div class="col-md-3">
  <br>
    <label for="anio" class="form-label">Año</label>
    <input type="date" class="form-control" name="anio"  required>
  </div>

  <div class="col-md-3">
  <br>
    <label for="genero" class="form-label " >Genero</label><br>
    <select name="genero"  class=" col-md-8 genero">
        @foreach($generos as $genero)
            <option value="{{$genero->id}}">{{ $genero->nombre_genero}}</option>
        @endforeach
    </select>
  </div>

  
  <div class="col-md-3">
  <br>
    <label for="director" class="form-label">Director</label><br>
    <select name="director" id="director" class="col-md-8 director">
        @foreach($directores as $director)
            <option value="{{$director->id}}">{{ $director->nombre ." ". $director->apellido}}</option>
        @endforeach
    </select>
  </div>

  <div class="col-md-3 ">
  <br>
        <label for="actores"  class="form-label">Actores</label>
        @csrf
        <div class="form-group ">
            <div class="multiselect col-12">
                <div class="selectBox"  onclick="mostrarCheckActores()">
                    <select class="actores ">
                        <option>Elija uno o mas actores</option>
                    </select>
                </div>

                <div id="checkboxes">
                    @foreach($actores as $actor)
                        <label for="$actores">
                        <input type="checkbox" name="actores[]" value="{{$actor->id}}" />{{" ".$actor->nombre ." ". $actor->apellido}}</label>
                    @endforeach  
                </div>
            </div>
        </div>
    </div>

  <div class="col-md-12">
    <br>
    <label for="portada" class="form-label">Elija una Imágen</label><br>
    <input type="file" name="portada" id="portada" >
  </div>
   
  <div class="col-12">
     <br><br>
    <button class="btn btn-primary" type="submit">Cargar Pelicula</button>
  </div>


</form>

@endsection