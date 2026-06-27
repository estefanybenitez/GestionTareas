@extends('Layout.app')


@section('content')
    <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Actualizar Asignacion de Tarea <i class="bi bi-person-badge-fill"></i></span></h3>
    <br>
    <br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/AsignarTarea/update/{{$detalle->id_detalle}}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="fecha" class="col-md-4 col-form-label text-md-end">{{ __('Fecha Inicio') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_inicio" type="date" class="form-control @error('fecha_inicio') is-invalid @enderror" name="fecha_inicio" value="{{$detalle->fecha_inicio}}" required autocomplete="role">

                                @error('fecha_inicio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="fecha" class="col-md-4 col-form-label text-md-end">{{ __('Fecha Fin') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_fin" type="date" class="form-control @error('fecha_fin') is-invalid @enderror" name="fecha_fin" value="{{$detalle->fecha_fin}}" required autocomplete="role">

                                @error('fecha_fin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                       
                        
                        <div class="row mb-3">
                            <label for="area" class="col-md-4 col-form-label text-md-end">{{ __('Area') }}</label>

                            <div class="col-md-6">
                            <select name="id_area" class="form-control" >
                            @foreach ($area as $item)
                            <option value="{{$item->id_area}}" {{$item->id_area == $detalle->id_detalle?'selected':''}}>{{$item->nombre_area}}</option>
                            @endforeach
                            </select>
                            @error('id_area')
                            <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                            </span>
                            @enderror
                            
                            </div>
                          
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ID empleado') }}</label>

                            <div class="col-md-6">
                            <select name="id_empleado" class="form-control" >
                            @foreach ($empleado as $item)
                            <option value="{{$item->id_empleado}}" {{$item->id_empleado == $detalle->id_detalle?'selected':''}}>{{$item->nombre_empleado}}</option>
                            @endforeach
                            </select>
                            @error('id_empleado')
                            <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="id_tarea" class="col-md-4 col-form-label text-md-end">{{ __('ID tarea') }}</label>

                            <div class="col-md-6">
                            <select name="id_tarea" class="form-control" >
                            @foreach ($tareas as $item)
                            <option value="{{$item->id_tarea}}" {{$item->id_tarea == $detalle->id_detalle?'selected':''}}>{{$item->nombre_tarea}}</option>
                            @endforeach
                            </select>
                            @error('id_tarea')
                            <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
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
