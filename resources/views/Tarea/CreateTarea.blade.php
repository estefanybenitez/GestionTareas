@extends('Layout.app')

@section('content')

    <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Crear Tarea <i class="bi bi-person-rolodex"></i></span></h3>
    <br>
    <br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/TareaStore">
                        @csrf

                        <div class="row mb-3">
                            <label for="nombre_tarea" class="col-md-4 col-form-label text-md-end">{{ __('Nombre de Tarea') }}</label>

                            <div class="col-md-6">
                                <input id="nombre_tarea" type="text" class="form-control @error('nombre_tarea') is-invalid @enderror" name="nombre_tarea" value="{{ old('nombre_tarea') }}" required autocomplete="name" autofocus>

                                @error('nombre_tarea')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">{{ __('Descripcion') }}</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="role">

                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                  

                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                <select name="id_estado" class="form-control">
                                    <option>
                                    @foreach ($estado_tarea as $item)
                                        <option value="{{$item->id_estado}}">{{$item->estado}}</option>
                                    @endforeach
                                </option>
                                </select>
                                    @error('id_estado')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" onclick="agregar(this)" >
                                    {{ __('Crear Tarea') }}
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

@section('scripts')
{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- JS --}}
{{-- <script src="{{asset('js/cambio.js')}}"></script> --}}
@endsection





