
@extends('Layout.app')

@section('content')

  <body class="p-3 m-0 border-0 bd-example">
@endsection

  @section('contenido1')
  <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Area<i class="bi bi-person-lines-fill"></i></span></h3>
  <br>
@endsection


@section('contenido2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/AreaStore">
                        @csrf

                        <div class="row mb-5">
                            <label for="nombre_area" class="col-md-4 col-form-label text-md-end">Nombre Area</label>

                            <div class="col-md-6">
                                <input id="nombre_area" type="text" class="form-control @error('nombre_area') is-invalid @enderror" name="nombre_area" " required autocomplete="name" autofocus>

                                @error('nombre_area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                
                            </div>
                            
                        </div>
                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


 
@yield('script')


   
