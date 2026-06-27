@extends('Layout.app')


@section('content')

    <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Actualizar<i class="bi bi-pencil"></i> </span></h3>
    <br>
    <br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="/AreaUpdate/{{$area->id_area}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="nombre_area" class="col-md-4 col-form-label text-md-end">Nombre Area</label>
                            <div class="col-5">
                                <input type="text" class="form-control" name="nombre_area" value="{{$area->nombre_area}}">
                                @error('nombre_area')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>  
                        <button class="btn btn-primary">Guardar</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{asset('js/product.js')}}"></script>
@endsection
