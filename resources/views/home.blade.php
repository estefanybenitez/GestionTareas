@extends('Layout.app')

  @section('banner')

      @component('components.Banner')
      @endcomponent

  @endsection

  @section('content')
    <div class="p-3 m-0 border-0 bd-example">   
    <h3 class="display-5 fw-bolder"><span class="text-gradient d-inline">Bienvenid@ {{Auth::user()->name}}</span></h3></div>
  @endsection

  @section('contenido3')
    <p class="text-muted">Hecha un vistazo a nuestras actividades y dinámicas en nuestras redes sociales!!</p>
  @endsection

  @section('contenido4')
  <div class="d-flex justify-content-center fs-2 gap-4">
    <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
    <a class="text-gradient" href="#!"><i class="bi bi-facebook"></i></a>
    <a class="text-gradient" href="#!"><i class="bi bi-instagram"></i></a>
  </div>
  @endsection
    

