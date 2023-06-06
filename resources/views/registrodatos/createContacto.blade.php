<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<br>
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registra los datos de un Contacto de emergencia</div>

                <div class="card-body">
    <form action="{{ route('registrodatos.storeContacto') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombreC">Nombre:</label>
            <input type="text" class="form-control" id="nombreC" name="nombreC" required>
        </div>
        <div class="form-group">
            <label for="appC">Apellido Paterno:</label>
            <input type="text" class="form-control" id="appC" name="appC" required>
        </div>
        <div class="form-group">
            <label for="apmC">Apellido Materno:</label>
            <input type="text" class="form-control" id="apmC" name="apmC" required>
        </div>
        <div class="form-group">
            <label for="relacionAlumnoC">Relación con el Alumno:</label>
            <input type="text" class="form-control" id="relacionAlumnoC" name="relacionAlumnoC" required>
        </div>
        <div class="form-group">
            <label for="nTelC">Número de Teléfono:</label>
            <input type="text" class="form-control" id="nTelC" name="nTelC" required>
        </div>
        <div class="form-group">
    <label for="estadoDir">Estado:</label>
    <input type="text" class="form-control" id="estadoDir" name="estadoDir" required>
</div>
<div class="form-group">
    <label for="municipioDir">Municipio:</label>
    <input type="text" class="form-control" id="municipioDir" name="municipioDir" required>
</div>
<div class="form-group">
    <label for="coloniaDir">Colonia:</label>
    <input type="text" class="form-control" id="coloniaDir" name="coloniaDir" required>
</div>
<div class="form-group">
    <label for="calleDir">Calle:</label>
    <input type="text" class="form-control" id="calleDir" name="calleDir" required>
</div>
<div class="form-group">
    <label for="nExteriorDir">Número Exterior:</label>
    <input type="text" class="form-control" id="nExteriorDir" name="nExteriorDir" required>
</div>
<div class="form-group">
    <label for="nInteriorDir">Número Interior:</label>
    <input type="text" class="form-control" id="nInteriorDir" name="nInteriorDir">
</div>
<div class="form-group">
    <label for="codigoPostalDir">Código Postal:</label>
    <input type="text" class="form-control" id="codigoPostalDir" name="codigoPostalDir" required>
</div>




        <button type="submit" class="btn btn-primary">Registrar Contacto</button>
    </form>
</div>
</div>

</div>
</div>

