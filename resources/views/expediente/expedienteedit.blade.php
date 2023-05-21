@extends('adminlte::page')

@section('title', 'Editar expediente')

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
                <div class="card-header custom-car-header">Editar informacion médica</div>

                <div class="card-body">
                    <form action="{{ route('informacionMedica.update') }}" method="POST" id="updateForm">
                        @csrf
                        <div class="form-group">
    <label for="nssAI">Número de seguridad social:</label>
    <input type="text" id="nssAI" name="nssAI" value="{{ $estudiante->nssAI}}" class="form-control">
</div>

                        <div class="form-group">
                            <label for="tipoSangreEx">Tipo de sangre:</label>
                            <input type="text" id="tipoSangreEx" name="tipoSangreEx" value="{{ $expediente->tipoSangreEx}}" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label for="alergiasEx">Alergias:</label>
                            <input type="text" id="alergiasEx" name="alergiasEx" value="{{ $expediente->alergiasEx}}" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label for="notasMedicasEx">Notas medicas:</label>
                            <input type="text" id="notasMedicasEx" name="notasMedicasEx" value="{{ $expediente->notasMedicasEx}}" class="form-control" required>
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
        darkModeIcon.classList.remove('fa-moon');
        darkModeIcon.classList.add('fa-sun');
        darkModeText.innerText = 'Modo Claro';
        darkModeToggle.checked = true;
    }

    darkModeToggle.addEventListener('change', (event) => {
        body.classList.toggle('dark-mode');

        // Cambiar el ícono y el texto según el modo
        if (body.classList.contains('dark-mode')) {
            darkModeIcon.classList.remove('fa-moon');
            darkModeIcon.classList.add('fa-sun');
            darkModeText.innerText = 'Modo Claro';
        } else {
            darkModeIcon.classList.remove('fa-sun');
            darkModeIcon.classList.add('fa-moon');
            darkModeText.innerText = 'Modo oscuro';
        }

        // Guarda la preferencia del usuario en el almacenamiento local
        localStorage.setItem('darkMode', body.classList.contains('dark-mode'));
    });
});
</script>
@stop
