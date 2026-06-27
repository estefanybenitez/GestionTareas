@extends('Layout.app')


@section('content')


  <body class="p-3 m-0 border-0 bd-example">
@endsection

  @section('contenido1')
  <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Tareas Asignadas<i class="bi bi-person-lines-fill"></i></span></h3>
  <br>
@endsection


@section('contenido2')

<a class="btn btn-success btn-sm" href="/ReportsTareaEmpleado">Descargar Tareas Asignadas por empleado</a>
<a class="btn btn-warning btn-sm" href="/AsignarTarea/show">Agregar</a>


<table class="container table table-hover table-bordered mt-2">
    {{-- Encabezados --}}
    <tr class="table-dark">
      <td>ID</td>
      <td>Fecha de Inicio</td>
      <td>Fecha Fin</td>
      <td>Area</td>
      <td>Empleado</td>
      <td>Tarea</td>
      {{-- <td>Estado</td> --}}
      <td>Acciones</td>
  </tr>
  
    {{-- Listado de usuarios --}}
    @foreach ($tarea_detallesup as $item)
    <tr>
        <td>{{$item->id_detalle}}</td>
        <td>{{$item->fecha_inicio}}</td>
        <td>{{$item->fecha_fin}}</td>
        <td>{{$item->nombre_area}}</td>
        <td>{{$item->nombre_empleado}}</td>
        <td>{{$item->nombre_tarea}}</td>
        {{-- <td>{{$item->estado}}</td> --}}
        <td>
                @if(Auth::user())
                {{-- boton para modificar --}}
                <a class="btn btn-primary btn-sm " href="/AsignarTarea/edit/{{$item->id_detalle}}">Modificar</a>
                @endif
                {{-- boton para eliminar --}}
                <button class="btn btn-danger btn-sm" url="/asignar/destroy/{{$item->id_detalle}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button>
        </td>
    </tr>
    @endforeach
  </table>
  @endsection
  
  </body>
  </html>
  @section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{asset('js/asignarupdate.js')}}"></script>
@endsection