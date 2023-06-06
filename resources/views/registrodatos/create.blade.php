
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar de datos del estudiante</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registrodatos.store') }}">
                        @csrf

                        <!-- Aquí van los campos para los datos del estudiante -->

                        <!-- Apellido Paterno -->
                       <!-- <div class="form-group">
                            <label for="appAI">Apellido Paterno:</label>
                            <input type="text" class="form-control" id="appAI" name="appAI">
                        </div>

                        Apellido Materno 
                        <div class="form-group">
                            <label for="apmAI">Apellido Materno:</label>
                            <input type="text" class="form-control" id="apmAI" name="apmAI">
                        </div>
                        -->
                        <!-- Sexo -->
                        <div class="form-group">
                            <label for="nControl">Número de Control:</label>
                            <input type="text" class="form-control" id="nControl" name="nControl">
                        </div>
                        <div class="form-group">
                            <label for="sexoAI">Sexo:</label>
                            <input type="text" class="form-control" id="sexoAI" name="sexoAI">
                        </div>

                        <!-- Número de Teléfono -->
                        <div class="form-group">
                            <label for="nTelAI">Número de Teléfono:</label>
                            <input type="text" class="form-control" id="nTelAI" name="nTelAI">
                        </div>

                        <!-- NSS -->
                        <div class="form-group">
                            <label for="nssAI">NSS:</label>
                            <input type="text" class="form-control" id="nssAI" name="nssAI">
                        </div>

                        <!-- Número de Control -->
                        
                        <div class="form-group">
    <label for="id_carrera">Carrera:</label>
    <select class="form-control" id="id_carrera" name="id_carrera">
        <option value="">Seleccione una carrera</option>
        @foreach($carreras as $carrera)
            <option value="{{ $carrera->id_carrera }}">{{ $carrera->nombreCa }}</option>
        @endforeach
    </select>
</div>

                        <!-- Botón de registro -->
                        <button type="submit" class="btn btn-primary">Siguiente</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
