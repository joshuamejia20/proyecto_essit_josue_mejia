@extends('layouts.app')

 @section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de Proyectos</h1>
        <a href="{{ route('proyecto.create')}}" class="btn btn-primary">Agregar Nuevo Proyecto</a>
    </div>
    <hr>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>

                <th>#</th>
                <th>Proyecto</th>
                <th>Fuente</th>
                <th>Monto Planificado</th>
                <th>Monto Patrocinado</th>
                <th>Fondos Propios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if ($proyecto->count() >0)
                @foreach ($proyecto as $rs)
                    <tr>
                        <td class="alig-middle">{{ $loop->iteration}}</td>
                        <td class="alig-middle">{{ $rs->NombreProyecto}}</td>
                        <td class="alig-middle">{{$rs->fuenteFondos}}</td>
                        <td class="alig-middle">
                            {{$rs->MontoPlanificado}}
                        </td>
                        <td class="alig-middle">
                            {{$rs->MontoPatrocinado}}
                        </td>
                        <td class="alig-middle">
                            {{$rs->MontoFondosPropios}}
                        </td>
                        <td class="alig-middle">
                            <div class="btn-group" role="group" aria-label="">
                                <!--<a href="" type="button" class="btn btn-secondary">Detalle</a>-->
                                <a href="{{ route('proyecto.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                &nbsp;&nbsp;&nbsp;
                                <form action="{{route('proyecto.destroy', $rs->id)}}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Desea eliminar el proyecto')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">No hay proyectos registrados</td>
                </tr>
            @endif
        </tbody>
    </table>
 @endsection
