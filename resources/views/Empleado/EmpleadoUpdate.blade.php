@extends('Layout.app')

@section('content')
    <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Actualizar Empleado<i class="bi bi-pencil"></i> </span></h3>
    <br>
    <br> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/empleado/update/{{$empleados->id_empleado}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-4">
                                <label for="nombre_empleado" class="col-md-4 col-form-label text-md-end">Nombre Empleado</label>
                                <div class="col-5">
                                    <input type="text" class="form-control" name="nombre_empleado" value="{{$empleados->nombre_empleado}}">
                                    @error('nombre_empleado')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-4">
                                <label for="telefono" class="col-md-4 col-form-label text-md-end">Telefono</label>
                                <div class="col-5">
                                    <input type="text" class="form-control" name="telefono" value= "{{$empleados->telefono}}">
                                    @error('telefono')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-end">Fecha Nacimiento</label>
                                <div class="col-5">
                                    <input type="date" class="form-control" name="fecha_nacimiento" value= "{{$empleados->fecha_nacimiento}}">
                                    @error('fecha_nacimiento')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="fecha_ingreso" class="col-md-4 col-form-label text-md-end">Fecha Igreso</label>
                                <div class="col-5">
                                    <input type="date" class="form-control" name="fecha_ingreso" value= "{{$empleados->fecha_ingreso}}">
                                    @error('fecha_ingreso')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="direccion" class="col-md-4 col-form-label text-md-end">Direccion</label>
                                <div class="col-5">
                                    <input type="txt" class="form-control" name="direccion" value= "{{$empleados->direccion}}">
                                    @error('direccion')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="id" class="col-md-4 col-form-label text-md-end">Usuario</label>
                                <div class="col-5">

                                    <select name="id" class="form-control">
                                        @foreach($users as $item)
                                            <option value="{{$item->id}}" {{$item->id==$empleados->id?'selected':''}}>{{$item->name}}</option>
                                        @endforeach
                                        </select>

                                    @error('id')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="id_area" class="col-md-4 col-form-label text-md-end">Area</label>
                                <div class="col-5">

                                    <select name="id_area" class="form-control">
                                    @foreach($area as $item)
                                        <option value="{{$item->id_area}}" {{$item->id_area==$empleados->id_area?'selected':''}}>{{$item->nombre_area}}</option>
                                    @endforeach
                                    </select>

                                    @error('id_area')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

