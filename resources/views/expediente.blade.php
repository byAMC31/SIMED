@extends('adminlte::page')

@section('title', 'Expediente')

@section('content_header')
@stop

@section('content')
<br>
<div class="card shadow rounded" style="width: 25rem;">
<center>
  <h5 class="card-header custom-car-header rounded-top">Informacion general</h5>
  </center>
  <div class="card-body rounded-bottom">
    <p class="card-text">
    <h1>{{ Auth::user()->name }}</h1>
@if($direccion)
<p>{{ $direccion->estadoDir }}</p>
<p>{{ $direccion->municipioDir }}</p>
<p>{{ $direccion->coloniaDir }}</p>
<p>{{ $direccion->calleDir }}</p>
<p>{{ $direccion->nExteriorDir }}</p>
<p>{{ $direccion->nInteriorDir }}</p>
<p>{{ $direccion->codigoPostalDir }}</p>
@else
    <p>No se encontró la dirección del usuario.</p>
@endif

    </p>
  </div>
</div>
@stop

@section('css')
<style>
.custom-car-header {
  background-color: #A2ECD1; /* Cambiar este valor por el color deseado */
  color: black; /* Cambiar este valor por el color de texto deseado */
}
</style>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop

