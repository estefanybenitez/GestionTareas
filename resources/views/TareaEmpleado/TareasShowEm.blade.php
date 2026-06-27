@extends('Layout.app')



@section('contenido1')

  </head>
  <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Mi Tareas</span></h3>


<p class="lead fw-light mb-4">Aqui se muestran sus tareas asignadas</p>
@endsection

@section('contenido2')
<a class="btn btn-success btn-sm" href="/ReportsTareaEmpleado">Descargar Reporte</a>


<table class="container table table-hover table-bordered mt-2">
  {{-- Encabezados --}}
  <tr class="table-dark">
    <td>ID</td>
    <td>Fecha Inicio</td>
    <td>Fecha Fin</td>
    <td>Tarea</td>
    <td>Descripcion</td>
    <td>Empleado</td>
    {{-- <td>Estado</td> --}}
</tr>

  {{-- Listado de usuarios --}}
  @foreach ($tarea_detalle as $item)
  <tr>
      <td>{{$item->id_detalle}}</td>
      <td>{{$item->fecha_inicio}}</td>
      <td>{{$item->fecha_fin}}</td>
      <td>{{$item->tarea}}</td>
      <td>{{$item->descripcion}}</td>
      <td>{{$item->empleado}}</td>
      {{-- <td>{{$item->estado}}</td>     --}}
      {{-- <td> --}}
          {{-- @if(Auth::user()->id_rol== 1) --}}
          {{-- boton para modificar --}}
          {{-- <a class="btn btn-primary btn-sm" href="/CrudUsers/edit/{{$item->id}}">Modificar</a> --}}
          {{-- @endif --}}
          {{-- boton para eliminar --}}
          {{-- <button class="btn btn-danger btn-sm" url="/users/destroy/{{$item->id}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button> --}}
      {{-- </td> --}}
  </tr>
  @endforeach
</table>
@endsection

</body>
</html>
@yield('script')
