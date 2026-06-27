@extends('Layout.app')

<!--Leer Usuarios-->
@section('content')

  </head>
  <body class="p-3 m-0 border-0 bd-example">
@endsection

  @section('contenido1')
  <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Usuarios <i class="bi bi-layout-text-sidebar-reverse"></i> </span></h3>
  <br>
@endsection


@section('contenido2')
<a class="btn btn-warning btn-sm" href="{{ route('register') }}">Agregar</a>

<table class="container table table-hover table-bordered mt-2">
        {{-- Encabezados --}}
        <tr class="table-dark">
          <td>User ID</td>
          <td>Nombre</td>
          <td>E-mail</td>
          <td>Rol</td>
          <td>Acciones</td>
      </tr>

        {{-- Listado de usuarios --}}
        @foreach ($users as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->role}}</td>
           
            <td>
                {{-- @if(Auth::user()->id_rol== 1) --}}
                {{-- boton para modificar --}}
                <a class="btn btn-primary btn-sm" href="/CrudUsers/edit/{{$item->id}}">Modificar</a>
                {{-- @endif --}}
                {{-- boton para eliminar --}}
                <button class="btn btn-danger btn-sm" url="/users/destroy/{{$item->id}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

  </body>
</html>
@yield('script')

