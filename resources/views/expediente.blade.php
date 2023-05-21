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

                    <a href="{{ route('usuario.edit') }}" class="btn btn-info">Editar datos</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow rounded" style="width: 18rem;">
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



    <div class="col-md-4">
        <div class="card shadow rounded" style="width: 18rem;">
            <center>
                <h5 class="card-header custom-car-header rounded-top">Información médica</h5>
            </center>
            <div class="card-body rounded-bottom">
                <p class="card-text">
                <p><label>NSS: </label> {{ $estudiante->nssAI}}</p>

                <p><label>Tipo de sangre: </label> {{ $expediente->tipoSangreEx}}</p>
                <p><label>Alergias: </label> {{ $expediente->alergiasEx}}</p>
                <p><label>notasMedicasEx: </label> {{ $expediente->notasMedicasEx}}</p>
                <br>
                <br>
                <br>
                <br>
                
                <a href="{{ route('informacionMedica.edit') }}" class="btn btn-info">Editar información médica</a>        
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow rounded" style="width: 18rem;">
            <center>
                <h5 class="card-header custom-car-header rounded-top">Información del contacto</h5>
            </center>
            <div class="card-body rounded-bottom">
                <p class="card-text">
                <p><label>Nombre: </label> {{ $contacto->nombreC}}</p>
                <p><label>Apellido paterno: </label> {{ $contacto->appC}}</p>
                <p><label>Apellido materno: </label> {{ $contacto->apmC}}</p>
                <p><label>Relacion con el estudiante: </label> {{ $contacto->relacionAlumnoC}}</p>
                <p><label>Numero de telefono: </label> {{ $contacto->nTelC}}</p>
                <br>
                 <p><label>Direccion del contacto </label></p>
                 <p><label>Estado: </label> {{ $contacto->direccion->estadoDir }}</p>
                 <p><label>Municipio:</label> {{ $contacto->direccion->municipioDir }}</p>
                 <p><label>Colonia:</label> {{ $contacto->direccion->coloniaDir }}</p>
                 <p><label>Calle:</label>{{ $contacto->direccion->calleDir }}</p>
                  <p><label>Número exterior:</label>{{ $contacto->direccion->nExteriorDir }}</p>
                  <p><label>Número Interior:</label> {{ $contacto->direccion->nInteriorDir }}</p>
                 <p><label>Codigo postal:</label> {{ $contacto->direccion->codigoPostalDir }}</p>
                
                
                
                
                <a href="{{ route('informacionContacto.edit') }}" class="btn btn-info">Editar información de contacto</a>        
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