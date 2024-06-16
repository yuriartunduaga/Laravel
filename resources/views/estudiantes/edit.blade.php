@extends('layouts.app')

@section('titulo', 'Editar clase')

@section('contenido')
<br>
<h3 class="text-center">Editar información de la clase</h3>

<form action="/estudiantes/{{$course->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombrecurso">Modifique el Nombre de la clase</label>
        <input name="nombre" id="nombrecurso" value="{{$course->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="interes">Modifique el interes de la clase</label>
        <input name="interes" id="interes" value="{{$course->interes}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>

@endsection
