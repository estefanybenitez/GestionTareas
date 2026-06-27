@extends('Layout.app')

@section('content')

  <body class="p-3 m-0 border-0 bd-example">
@endsection

  @section('contenido1')
  <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Area<i class="bi bi-person-lines-fill"></i></span></h3>
  <br>
@endsection


@section('contenido2')

<a class="btn btn-warning btn-sm" href="/AreaCreate">Agregar</a>

    {{-- Encabezados --}}
    <table class="container table table-hover table-bordered mt-4">
        {{-- Encabezados --}}
        <tr class="table-dark">
                            <td>C&oacute;digo</td>
                            <td>Nombre Area</td>    
                            <td>Acciones</td>
                        </tr>
    
                        {{-- Listado de productos --}}
                        @foreach ($area as $item)
                        <tr>
                            <td>{{$item->id_area}}</td>
                            <td>{{$item->nombre_area}}</td>
                        
                            <td>
                         
                            {{-- boton para modificar --}}
                            <a class="btn btn-primary btn-sm" href="/Area/edit/{{$item->id_area}}">Modificar</a>
                           
                            {{-- boton para eliminar --}}
                            <button class="btn btn-danger btn-sm" url="/Area/destroy/{{$item->id_area}}" onclick="destroy(this)" token="{{csrf_token()}}">Eliminar</button> 
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    
    @endsection
    
    @section('scripts')
  {{-- SweetAlert --}}
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  {{-- JS--}}
  <script src="{{asset('js/delete.js')}}"></script>

    @endsection

