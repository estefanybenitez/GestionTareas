@extends('Layout.app')

@section('content')

  <body class="p-3 m-0 border-0 bd-example">
@endsection

  @section('contenido1')
  <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Tareas Creadas <i class="bi bi-person-lines-fill"></i></span></h3>
  <br>
@endsection


@section('contenido2')

<a class="btn btn-warning btn-sm" href="/tarea/create">Agregar</a>

<table class="container table table-hover table-bordered mt-2">
    {{-- Encabezados --}}
    <tr class="table-dark">
      <td>ID</td>
      <td>Nombre de Tarea</td>
      <td>Descripcion</td>
      <td></td>
      <td>Acciones</td>
  </tr>
  
    {{-- Listado de usuarios --}}
    @foreach ($tarea as $item)
    <tr>
        <td>{{$item->id_tarea}}</td>
        <td>{{$item->nombre_tarea}}</td>
        <td>{{$item->descripcion}}</td>  
        <td>{{$item->estado}}</td> 
        <td>
                @if(Auth::user())
                {{-- boton para modificar --}}
                <a class="btn btn-primary btn-sm" href="/tarea/edit/{{$item->id_tarea}}">Modificar</a>
                @endif
                {{-- boton para eliminar --}}
                <button class="btn btn-danger btn-sm" url="/tarea/destroy/{{$item->id_tarea}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button>
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
    <script src="{{asset('js/delete.js')}}"></script>
@endsection