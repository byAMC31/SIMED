<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar dirección</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registrodatos.storeDireccion') }}">
                        @csrf

                        <!-- Campos del formulario -->

                        <!-- Estado -->
                        <div class="form-group">
                            <label for="estadoDir">Estado:</label>
                            <input type="text" class="form-control" id="estadoDir" name="estadoDir" required>
                        </div>

                        <!-- Municipio -->
                        <div class="form-group">
                            <label for="municipioDir">Municipio:</label>
                            <input type="text" class="form-control" id="municipioDir" name="municipioDir" required>
                        </div>

                        <!-- Colonia -->
                        <div class="form-group">
                            <label for="coloniaDir">Colonia:</label>
                            <input type="text" class="form-control" id="coloniaDir" name="coloniaDir" required>
                        </div>

                        <!-- Calle -->
                        <div class="form-group">
                            <label for="calleDir">Calle:</label>
                            <input type="text" class="form-control" id="calleDir" name="calleDir" required>
                        </div>

                        <!-- Número Exterior -->
                        <div class="form-group">
                            <label for="nExteriorDir">Número Exterior:</label>
                            <input type="text" class="form-control" id="nExteriorDir" name="nExteriorDir" required>
                        </div>

                        <!-- Número Interior -->
                        <div class="form-group">
                            <label for="nInteriorDir">Número Interior (Opcional):</label>
                            <input type="text" class="form-control" id="nInteriorDir" name="nInteriorDir">
                        </div>

                        <!-- Código Postal -->
                        <div class="form-group">
                            <label for="codigoPostalDir">Código Postal:</label>
                            <input type="text" class="form-control" id="codigoPostalDir" name="codigoPostalDir" required>
                        </div>

                        <!-- Botón de enviar -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Siguiente</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>