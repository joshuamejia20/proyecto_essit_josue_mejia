@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Agregar Proyecto</h1>
    <hr>
    <form action="{{ route('proyecto.store')}}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="NombreProyecto" class="form-control" placeholder="Nombre del Proyecto">
            </div>
            <div class="col">
                <input type="text" name="fuenteFondos" class="form-control" placeholder="Fuente de Fondos">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="MontoPlanificado" class="form-control" placeholder="Monto Planificado">
            </div>
            <div class="col">
                <input type="number" name="MontoPatrocinado" class="form-control" placeholder="Monto Patrocinado">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="MontoFondosPropios" class="form-control" placeholder="Monto Fondos Propios">
            </div>
            <div class="col">
                <button class="btn btn-primary btn-block">Guardar</button>
            </div>
        </div>
    </form>
@endsection
