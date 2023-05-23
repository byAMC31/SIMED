@extends('adminlte::page')

@section('title', 'Justificantes')

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

<div class="form-group">
    <label for="consulta-select">Seleccione un justificante:</label>
    <select class="form-control" id="consulta-select">
        @foreach ($consulta as $singleConsulta)
        <option value="{{ $singleConsulta->id_consulta }}">{{ 'Justificante #' . $singleConsulta->id_consulta }}</option>
        @endforeach
    </select>
</div>
<button id="pdf-button" class="btn btn-info mt-3" style="display: none;">Generar PDF</button>

<div class="row">
    <div class="col-md-11">
    <div id="consulta-info" style="display: none;">
            <div class="row card-body">
                <!-- La información de la consulta se llenará aquí -->
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="vendor/adminlte/dist/css/medic.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script src="vendor/adminlte/dist/js/darkk.js"></script>
<script>
    $(document).ready(function() {
        let consultas = @json($consulta);
        let user = @json($user);
        let estudiante = @json($estudiante);

        $('#consulta-select').change(function() {
            let consultaId = $(this).val();
            let selectedConsulta = consultas.find(function(singleConsulta) {
                return singleConsulta.id_consulta == consultaId;
            });

            let fecha = new Date(selectedConsulta.fechaCo.replace('Z', ''));
            let fechaFormateada = fecha.toLocaleDateString('es-ES');

            let receta = selectedConsulta.receta;
            let medicamentosHtml = '';
            receta.medicamentos_recetados.forEach(medRecetado => {
                medicamentosHtml += `

                <br>
                <p><label>Medicamento recetado: </label></p>
                <p><label>Nombre del medicamento: </label> ${medRecetado.medicamento.nombreMe}</p>
                <p><label>Descripción: </label> ${medRecetado.medicamento.descripcionMe}</p>
               
                
                <p><label>__________________________________________ </label></p>
                <p><label>Responsable del area: </label>${selectedConsulta.medico.nombreMe} ${selectedConsulta.medico.appMe} ${selectedConsulta.medico.apmMe}</p>

                `;
            });

            let consultaInfoHtml = `
            <div class="col-md-5">
                <p class="card-text">

                <img src="vendor/adminlte/dist/img/AdminLTELogo.png" alt="Logo ITO" width="70">

                <p><label>DEPARTAMENTO DE SERVICIOS ESCOLARES </label></p>
                <p><label>OFNA. DE SERVICIOS ESTUDIANTILES </label></p>
                <p><label>AREA DE SERVICIO MÉDICO</label></p>

                    <p><label>Nombre: </label>${user.name}</p>
                    <p><label>Número de control: </label>${estudiante.nControl}</p>
                    <p><label>Sexo: </label>${estudiante.sexoAI}</p>
              

                    <p><label>_____________________ </label></p>
                    <p><label>FIRMA DEL ESTUDIANTE </label></p>

                </p>
            </div>
            <div class="col-md-6">
            <img src="vendor/adminlte/dist/img/sep.png" alt="Logo ITO" width="400">

                <p class="card-text">
                <p><label>Fecha: </label>${fechaFormateada}</p>

                    <p><label>Diagnóstico: </label>${selectedConsulta.diagnosticoCo}</p>
                    ${medicamentosHtml}
                </p>  
            </div>
`;

$('#consulta-info .card-body').html(consultaInfoHtml);
            $('#consulta-info').show();
            $('#pdf-button').show();
        });

        $('#pdf-button').click(function() {
            let element = document.getElementById('consulta-info');
            html2pdf().from(element).save('justificante.pdf');
        });

        $('#consulta-select').change();
    });
</script>

@stop
