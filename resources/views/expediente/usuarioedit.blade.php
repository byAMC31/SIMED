@extends('adminlte::page')

@section('title', 'Editar infromacion')

@section('content_header')
@stop

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header custom-car-header">Editar informacion general</div>

                <div class="card-body">
                    <form action="{{ route('usuario.update') }}" method="POST" id="updateForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" name="name" value="{{ $estudiante->user->name }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="appAI">Apellido paterno:</label>
                            <input type="text" id="appAI" name="appAI" value="{{ $estudiante->appAI }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="apmAI">Apellido materno:</label>
                            <input type="text" id="apmAI" name="apmAI" value="{{ $estudiante->apmAI }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="sexoAI">Sexo:</label>
                            <input type="text" id="sexoAI" name="sexoAI" value="{{ $estudiante->sexoAI }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="nTelAI">Número de teléfono:</label>
                            <input type="text" id="nTelAI" name="nTelAI" value="{{ $estudiante->nTelAI }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="nControl">Número de control:</label>
                            <input type="text" id="nControl" name="nControl" value="{{ $estudiante->nControl }}" class="form-control" required>
                        </div>


                        <button type="button" class="btn btn-info" onclick="validateAndSubmitForm()">Guardar cambios</button>
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

    .is-invalid {
        border-color: #ff0000;
    }
</style>
@stop
@section('js')
<script>
    function validateAndSubmitForm() {
        let inputs = document.querySelectorAll('#updateForm input[required]');
        let allFilled = true;

        inputs.forEach(input => {
            if(input.value.trim() === '') {
                input.classList.add('is-invalid');
                allFilled = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if(allFilled && confirm("¿Estás seguro de que deseas guardar los cambios?")) {
            document.getElementById("updateForm").submit();
        } else {
            alert('Por favor, llena todos los campos requeridos en rojo.');
        }
    }
</script>
@stop
