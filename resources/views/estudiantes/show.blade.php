@extends('layouts.app')

@section('titulo', 'Detalle Clase')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($course->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$course->interes}}</p>
    </div>
    <br>
    <a href="/estudiantes/{{$course->id}}/edit" class="btn btn-success">Editar clase</a>

</div>

@endsection
