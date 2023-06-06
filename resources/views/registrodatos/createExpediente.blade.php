<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro del Expediente</div>

                <div class="card-body">
                <form action="{{ route('registrodatos.storeExpediente') }}" method="post">
                        @csrf

                        <!-- Tipo de Sangre -->
                        <div class="form-group">
                            <label for="tipoSangreEx">Tipo de Sangre:</label>
                            <input type="text" class="form-control" id="tipoSangreEx" name="tipoSangreEx" required>
                        </div>

                        <!-- Alergias -->
                        <div class="form-group">
                            <label for="alergiasEx">Alergias:</label>
                            <textarea class="form-control" id="alergiasEx" name="alergiasEx" rows="3" required></textarea>
                        </div>

                        <!-- Notas Médicas -->
                        <div class="form-group">
                            <label for="notasMedicasEx">Notas Médicas:</label>
                            <textarea class="form-control" id="notasMedicasEx" name="notasMedicasEx" rows="3"></textarea>
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
