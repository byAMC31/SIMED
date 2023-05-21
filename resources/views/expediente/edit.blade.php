@extends('adminlte::page')

@section('title', 'Editar direcciòn')

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
    .dark-mode-text {
    color: white;
}

.light-mode-text {
    color: black;
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
<script>
document.addEventListener('DOMContentLoaded', () => {
    const darkModeToggle = document.querySelector('#darkModeToggle');
    const body = document.querySelector('body');
    const darkModeIcon = document.getElementById('darkModeIcon');
    const darkModeText = document.getElementById('darkModeText');

    // Aplica el modo oscuro si la última preferencia del usuario fue el modo oscuro
    if (localStorage.getItem('darkMode') === 'true') {
        body.classList.add('dark-mode');
        darkModeIcon.classList.remove('fas', 'fa-moon');
        darkModeIcon.classList.add('fas', 'fa-sun');
        darkModeText.innerText = 'Modo Claro';
        darkModeToggle.checked = true;
    }

    darkModeToggle.addEventListener('change', (event) => {
        body.classList.toggle('dark-mode');

        // Cambiar el ícono y el texto según el modo
        if (body.classList.contains('dark-mode')) {
            darkModeIcon.classList.remove('fas', 'fa-moon');
            darkModeIcon.classList.add('fas', 'fa-sun');
            darkModeText.innerText = 'Modo Claro';
        } else {
            darkModeIcon.classList.remove('fas', 'fa-sun');
            darkModeIcon.classList.add('fas', 'fa-moon');
            darkModeText.innerText = 'Modo oscuro';
        }

        // Guarda la preferencia del usuario en el almacenamiento local
        localStorage.setItem('darkMode', body.classList.contains('dark-mode'));
    });
});
</script>
@stop
