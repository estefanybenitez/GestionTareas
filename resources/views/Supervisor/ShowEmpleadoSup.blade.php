@extends('Layout.app')

@section('content')

  <body class="p-3 m-0 border-0 bd-example">
@endsection

  @section('contenido1')
  <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Empleados <i class="bi bi-person-lines-fill"></i></span></h3>
  <br>
@endsection


@section('contenido2')

<table class="container table table-hover table-bordered mt-2">
    {{-- Encabezados --}}
    <tr class="table-dark">
      <td>ID</td>
      <td>Nombre</td>
      <td>Telefono</td>
      <td>Fecha Nacimiento</td>
      <td>Fecha Ingreso</td>
      <td>Direccion</td>
      <td>Rol</td>
      <td>Area</td>
      {{-- <td>Acciones</td> --}}
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
        <td>{{$item->role}}</td>
        <td>{{$item->area}}</td>      
        {{-- <td> --}}
           
            {{-- boton para modificar   --}}
           {{-- <a class="btn btn-primary btn-sm" href="/CrudUsers/edit/{{$item->id}}">Modificar</a> --}}
          
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