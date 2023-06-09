<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<div class="card text-white bg-dark mb-3">
    <div class="card-header text-center">
        <h4>Gobierno de El Salvador</h4>
        <h5>Corte Suprema de Justicia</h5>
        <h6><?php echo date("d/m/Y") ?></h6>
    </div>
  </div>

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>

            <th>#</th>
            <th>Proyecto</th>
            <th>Fuente</th>
            <th>Monto Planificado</th>
            <th>Monto Patrocinado</th>
            <th>Fondos Propios</th>
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
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="7">No hay proyectos registrados</td>
            </tr>
        @endif
    </tbody>
</table>
