<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Tareas-Empleados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <h1>Listado de Tarea-Empleados</h1>
    <hr>
    <br>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">C&oacute;digo</th>
            <th scope="col">Fecha Inicio</th>
            <th scope="col">Fecha Fin</th>
            <th scope="col">Tarea</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Empleado</th>
        </tr>
    </thead>
    <tbody>
        {{-- Listado de usuarios --}}
        @foreach ($data as $item)
        <tr>
            <td>{{$item->id_detalle}}</td>
            <td>{{$item->fecha_inicio}}</td>
            <td>{{$item->fecha_fin}}</td>
            <td>{{$item->tarea}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->empleado}}</td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
</body>
</html>

