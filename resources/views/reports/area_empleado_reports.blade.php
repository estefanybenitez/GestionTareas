<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Empleados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <h1>Listado de Area-Empleados</h1>
    <hr>
    <br>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">C&oacute;digo</th>
            <th scope="col">Nombre Empleado</th>
            <th scope="col">Telefono</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Fecha Ingreso</th>
            <th scope="col">Area</th>
          </tr>
        </thead>
        <tbody>

            @foreach($data as $item)
            <tr>
                <th>{{$item['id_empleado']}}</th>
                <td>{{$item['nombre_empleado']}}</td>
                <td>{{$item['telefono']}}</td>
                <td>{{$item['fecha_nacimiento']}}</td>
                <td>{{$item['fecha_ingreso']}}</td>
                <td>{{$item['Area']}}</td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
</body>
</html>

