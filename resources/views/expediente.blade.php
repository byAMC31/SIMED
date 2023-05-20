@extends('adminlte::page')

@section('title', 'Expediente')

@section('content_header')
@stop

@section('content')
<br>
<div class="row">
    <div class="col-md-6">
        <div class="card shadow rounded" style="width: 20rem;">
            <center>
                <h5 class="card-header custom-car-header rounded-top">Información general</h5>
            </center>
            <div class="card-body rounded-bottom">
                <p class="card-text">
                    <p><label>Email:</label> {{ Auth::user()->email }}</p>
                    <p><label>Nombre:</label> {{ Auth::user()->name }}</p>
                    <p><label>Apellido paterno:</label> {{ $estudiante->appAI}}</p>
                    <p><label>Apellido materno:</label> {{ $estudiante->apmAI}}</p>
                    <p><label>Sexo: </label> {{ $estudiante->sexoAI}}</p>
                    <p><label>Numero de telefono: </label> {{ $estudiante->nTelAI}}</p>
                    <p><label>Numero de control: </label> {{ $estudiante->nControl}}</p>

                    <a href="{{ route('usuario.edit') }}" class="btn btn-info">Editar datos</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow rounded" style="width: 20rem;">
            <center>
                <h5 class="card-header custom-car-header rounded-top">Dirección</h5>
            </center>
            <div class="card-body rounded-bottom">
                <p class="card-text">
                    @if($direccion)
                        <p><label>Estado:</label>{{ $direccion->estadoDir }}</p>
                        <p><label>Municipio:</label> {{ $direccion->municipioDir }}</p>
                        <p><label>Colonia:</label> {{ $direccion->coloniaDir }}</p>
                        <p><label>Calle:</label>{{ $direccion->calleDir }}</p>
                        <p><label>Número exterior:</label>{{ $direccion->nExteriorDir }}</p>
                        <p><label>Número Interior:</label> {{ $direccion->nInteriorDir }}</p>
                        <p><label>Codigo postal:</label> {{ $direccion->codigoPostalDir }}</p>

                        <a href="{{ route('expediente.edit') }}" class="btn btn-info">Editar dirección</a>

                    @else
                        <p>No se encontró la dirección del usuario.</p>
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<style>
    .custom-car-header {
        background-color: #A2ECD1;
        color: black;
    }

    p {
        line-height: .1;
    }
</style>
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop


