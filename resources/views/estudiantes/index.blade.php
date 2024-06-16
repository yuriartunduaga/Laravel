@extends('layouts.app')

@section('titulo', 'Listado de clases')

@section('contenido')
<br>
<h3 class="text-center">Listado de Clases Disponibles</h3>
<br>
<div class="row">
    @foreach ($course as $cursito)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img style="height: 180px; width:200px; margin:20px" src="{{ Storage::url($cursito->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$cursito->nombre}}</h5>
              <p class="card-text">{{$cursito->interes}}</p>
              <a href="/estudiantes/{{$cursito->id}}" class="btn btn-success">Ver detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
