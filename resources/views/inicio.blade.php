{{-- Heredamos la estructura --}}

{{-- viene del la carpeta Layout y 
    toma el diseño de app con el menu heredado de la carpeta components --}}
@extends('Layout.app')

{{-- Definimos el titulo --}}
@section('titulo', 'Inicio')

{{-- Definimos el contenido --}}
@section('content')
<h1>Pantalla de inicio</h1>
@endsection