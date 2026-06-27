@extends('Layout.app')


@section('content')


    <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Crear Empleado<i class="bi bi-pencil"></i> </span></h3>
    <br>
    <br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    
                    <form method="POST" action="/StoreEmpleados">
                        @csrf

                        <div class="row mb-3">

                            <label for="nombre_empleado" class="col-md-4 col-form-label text-md-end">Nombre </label>
                            <div class="col-md-6">
                                <input id="nombre_empleado"  type="nombre_empleado" class="form-control" name="nombre_empleado">
                                @error('nombre_empleado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <label for="telefono" class="col-md-4 col-form-label text-md-end">telefono </label>
                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono">
                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-end">Fecha Nacimiento</label>
                            <div class="col-md-6">
                                <input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento">
                                @error('fecha_nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">

                            <label for="fecha_ingreso" class="col-md-4 col-form-label text-md-end">Fecha Ingreso</label>
                            <div class="col-md-6">
                                <input id="fecha_ingreso" type="date" class="form-control" name="fecha_ingreso">
                                @error('fecha_ingreso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <label for="direccion" class="col-md-4 col-form-label text-md-end">Direccion</label>
                            <div class="col-md-6">
                                <input id="direccion" type="txt" class="form-control" name="direccion">
                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <label for="id" class="col-md-4 col-form-label text-md-end">Usuario</label>
                            <div class="col-md-6">
                                <select id="id"  name="id" class="form-control">
                                    <option>
                                    @foreach($users as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    </option>
                                </select>
                                @error('id')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">

                            <label for="area" class="col-md-4 col-form-label text-md-end">Area</label>
                            <div class="col-md-6">
                                <select id="id_area" name="id_area" class="form-control">
                                    <option>
                                    @foreach($area as $item)
                                    <option value="{{$item->id_area}}">{{$item->nombre_area}}</option>
                                    @endforeach
                                    </option>
                                </select>
                                @error('id_area')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                    

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="col-12 mt-2">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>

                                {{-- <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
