@extends('Templates.gerente')
@section('administrador_contenido')

    <link rel="stylesheet" href="{{ asset ('css/proyecto.css')}}">
    <link rel="stylesheet" href="{{asset('jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Generalidades Proyectos</li>
        </ol>
      </nav>


<a href="{{url('proyecto/create')}}" class="btn btn-primary">Nuevo Proyecto</a>

<div class="container">
@foreach ($proyectos as $proyecto)



        <div class="card__perfil ">
            <div class="card__nombre">
               <CENTER> <h3>{{ $proyecto->NombreProyecto}}</h3></CENTER>
                <p> Codigo: {{ $proyecto->CodigoProyecto}}</p>
            </div>
            <hr>
            <div class="card__descripcion">
                <p>Fecha de entrega: {{ $proyecto->FechaEntrega}}</p>
                <p>Fecha de Realizacion: {{ $proyecto->FechaRealizacion}}</p>
                <p>Tipo de Proyecto: </p>
                <p>Estado: {{ $proyecto->Estado}}</p>

            </div>
            <hr>
            <div class="card__button">
            <a href="{{ url('proyecto/'.$proyecto->IdProyecto)}}">Ver detalles</a>

            </div>

        </div>
 @endforeach



 <div style="height: 50px;"></div>

<div class="row col-6">
<canvas id="myChart" width="400" height="400"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>


        </div>

    <br>

    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.min.js"></script>
    <script src="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script>

    <script src="js/codigo.js"></script>
    <script>
   const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['1', '2', '3', '4', '5', '6'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


</script>

@endsection

