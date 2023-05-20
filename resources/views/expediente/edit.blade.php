@extends('adminlte::page')

@section('title', 'Editar expediente')

@section('content_header')
@stop

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header custom-car-header">Editar dirección</div>

                <div class="card-body">
                    <form action="{{ route('expediente.update') }}" method="POST" id="updateForm">
                        @csrf

                        <div class="form-group">
                            <label for="estadoDir">Estado:</label>
                            <input type="text" id="estadoDir" name="estadoDir" value="{{ $direccion->estadoDir }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="municipioDir">Municipio:</label>
                            <input type="text" id="municipioDir" name="municipioDir" value="{{ $direccion->municipioDir }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="coloniaDir">Colonia:</label>
                            <input type="text" id="coloniaDir" name="coloniaDir" value="{{ $direccion->coloniaDir }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="calleDir">Calle:</label>
                            <input type="text" id="calleDir" name="calleDir" value="{{ $direccion->calleDir }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="nExteriorDir">Número exterior:</label>
                            <input type="text" id="nExteriorDir" name="nExteriorDir" value="{{ $direccion->nExteriorDir }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="nInteriorDir">Número interior:</label>
                            <input type="text" id="nInteriorDir" name="nInteriorDir" value="{{ $direccion->nInteriorDir }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="codigoPostalDir">Código postal:</label>
                            <input type="text" id="codigoPostalDir" name="codigoPostalDir" value="{{ $direccion->codigoPostalDir }}" class="form-control" required>
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
