@extends('adminlte::page')

@section('title', 'Editar contacto')

@section('content_header')
@stop

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header custom-car-header">Editar informacion del contacto</div>

                <div class="card-body">
                    <form action="{{ route('informacionContacto.update') }}" method="POST" id="updateForm">
                        @csrf

                        <div class="form-group">
                            <label for="nombreC">Nombre del contacto:</label>
                            <input type="text" id="nombreC" name="nombreC" value="{{ $contacto->nombreC }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="appC">Apellido paterno del contacto:</label>
                            <input type="text" id="appC" name="appC" value="{{ $contacto->appC }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="apmC">Apellido materno del contacto:</label>
                            <input type="text" id="apmC" name="apmC" value="{{ $contacto->apmC }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="relacionAlumnoC">Relacion que tiene el contacto con el estudiante:</label>
                            <input type="text" id="relacionAlumnoC" name="relacionAlumnoC" value="{{ $contacto->relacionAlumnoC }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nTelC">Nùmero de telefono:</label>
                            <input type="text" id="nTelC" name="nTelC" value="{{ $contacto->nTelC }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="estadoDir">Estado del contacto:</label>
                            <input type="text" id="estadoDir" name="estadoDir" value="{{ $contacto->direccion->estadoDir }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="municipioDir">Municipio del contacto:</label>
                            <input type="text" id="municipioDir" name="municipioDir" value="{{ $contacto->direccion->municipioDir }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="coloniaDir">Colonia del contacto:</label>
                            <input type="text" id="coloniaDir" name="coloniaDir" value="{{ $contacto->direccion->coloniaDir }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="calleDir">Calle del contacto:</label>
                            <input type="text" id="calleDir" name="calleDir" value="{{ $contacto->direccion->calleDir }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="nExteriorDir">Número Exterior del contacto:</label>
                            <input type="text" id="nExteriorDir" name="nExteriorDir" value="{{ $contacto->direccion->nExteriorDir }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="nInteriorDir">Número Interior del contacto:</label>
                            <input type="text" id="nInteriorDir" name="nInteriorDir" value="{{ $contacto->direccion->nInteriorDir }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="codigoPostalDir">Código Postal del contacto:</label>
                            <input type="text" id="codigoPostalDir" name="codigoPostalDir" value="{{ $contacto->direccion->codigoPostalDir }}" class="form-control" required>
                        </div>


                        <button type="button" class="btn btn-info" onclick="showConfirmation()">Guardar cambios</button>
                        <a href="/expediente" class="btn btn-danger">Cancelar</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<style>
    .custom-car-header {
        background-color: #A2ECD1;
        color: black;
    }

    p {
        line-height: .1;
    }
</style>
@stop

@section('js')
<script>
    function showConfirmation() {
        if (confirm("¿Estás seguro de que deseas guardar los cambios?")) {
            document.getElementById("updateForm").submit();
        }
    }
</script>
@stop