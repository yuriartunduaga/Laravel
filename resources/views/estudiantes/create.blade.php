@extends('layouts.app')

@section('titulo','estudiantes')

@section('contenido')
    <br>
    <h3>Nuevos Estudiantes</h3>
    <form action="/estudiantes" method="post">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre y Apellido</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="interes" class="form-label">interes</label>
            <input type="text" class="form-control" id="interes" name="interes">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>


@endsection
