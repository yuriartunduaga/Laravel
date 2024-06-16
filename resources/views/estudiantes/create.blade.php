@extends('layouts.app')

@section('titulo','estudiantes')

@section('contenido')
    <br>
    <h3>Nuevos Cursos para estudiantes</h3>
    <form action="/estudiantes" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="interes" class="form-label">interes</label>
            <input type="text" class="form-control" id="interes" name="interes">
        </div>
        <div class="form-group">
            <label for="imagen">Cargar nueva imagen</label>
            <br>
            <input name="imagen" id="imagen" type="file">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>


@endsection
