@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Agregar Proyecto</h1>
    <hr>
    <form action="{{ route('proyecto.update', $proyecto->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="NombreProyecto" class="form-control" placeholder="Nombre del Proyecto" value="{{ $proyecto->NombreProyecto}}">
            </div>
            <div class="col">
                <input type="text" name="fuenteFondos" class="form-control" placeholder="Fuente de Fondos" value="{{ $proyecto->fuenteFondos}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="MontoPlanificado" class="form-control" placeholder="Monto Planificado" value="{{ $proyecto->MontoPlanificado}}">
            </div>
            <div class="col">
                <input type="number" name="MontoPatrocinado" class="form-control" placeholder="Monto Patrocinado" value="{{ $proyecto->MontoPatrocinado}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="MontoFondosPropios" class="form-control" placeholder="Monto Fondos Propios" value="{{ $proyecto->MontoFondosPropios}}">
            </div>
            <div class="col">
                <button class="btn btn-warning btn-block">Actualizar</button>
            </div>
        </div>
    </form>
@endsection
