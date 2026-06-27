@extends('Layout.app')
<html>

@section('content')


  <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Empleados <i class="bi bi-person-lines-fill"></i></span></h3>
  <br>
  <div class="col-md-6 offset-md-4">
    {{-- <a class="btn btn-success btn-sm" href="/Pedido/create">
    Descargar Reporte</button> --}}
    <a class="btn btn-warning btn-sm" href="/empleado/create">Agregar</a>
    <a class="btn btn-success btn-sm" href="/ReportsAreEmpleado">Descargar Reporte</a>
  </div>

<table class="container table table-hover table-bordered mt-2">
    {{-- Encabezados --}}
    <tr class="table-dark">
      <td>ID</td>
      <td>Nombre</td>
      <td>Telefono</td>
      <td>Fecha Nacimiento</td>
      <td>Fecha Ingreso</td>
      <td>Direccion</td>
      <td>Usuario</td>
      <td>Area</td>
      <td>Acciones</td>   
  </tr>
  
    {{-- Listado de usuarios --}}
    @foreach ($empleados as $item)
    <tr>
        <td>{{$item->id_empleado}}</td>
        <td>{{$item->nombre_empleado}}</td>
        <td>{{$item->telefono}}</td>
        <td>{{$item->fecha_nacimiento}}</td>
        <td>{{$item->fecha_ingreso}}</td>
        <td>{{$item->direccion}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->area}}</td>      
        <td class="p-2">
           
            {{-- boton para modificar   --}}
          <a class="btn btn-primary btn-sm" href="/empleado/edit/{{$item->id_empleado}}">Modificar</a>
      
            {{-- boton para eliminar --}}
          <button class="btn btn-danger btn-sm" url="/DestroyEmpleado/{{$item->id_empleado}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button>
        </td>
    </tr>
    @endforeach
  </table>
  

  </html>
  @endsection

  

  @yield('script')
  @section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS--}}
    <script src="{{asset('js/delete.js')}}"></script>
@endsection