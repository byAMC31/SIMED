@extends('adminlte::page')

@section('title', 'Expediente')

@section('content_header')

<div class="custom-control custom-switch" align="right">
    <input type="checkbox" class="custom-control-input" id="darkModeToggle">
    <label class="custom-control-label" for="darkModeToggle">
        <span id="darkModeIcon" class="fas fa-moon" style="margin-right:10px;"></span>
        <span id="darkModeText">Modo oscuro</span>
    </label>
</div>

@stop

@section('content')
<br>


<div class="row">
    
    <div class="col-md-4">
        <div class="card shadow rounded" style="width: 18rem;">
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
              
              
              
                </p>
            </div>
        </div>
    </div>
    


</div>
@stop

@section('css')
<link rel="stylesheet" href="vendor/adminlte/dist/css/medic.css">
@stop


@section('js')
<script src="vendor/adminlte/dist/js/darkk.js"></script>
@stop

