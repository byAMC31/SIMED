@extends('adminlte::page')

@section('title', 'Expediente')

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
    <label for="consulta-select">Selecciona una consulta:</label>
    <select class="form-control" id="consulta-select">
        @foreach ($consulta as $singleConsulta)
        <option value="{{ $singleConsulta->id_consulta }}">{{ 'Consulta #' . $singleConsulta->id_consulta }}</option>
        @endforeach
    </select>
</div>

<div class="row">
    <div class="col-md-5">
        <div id="consulta-info" class="card" style="display: none;">
            <div class="card-body">
                <!-- La información de la consulta se llenará aquí -->
            </div>
        </div>
        <div id="receta" class="card">
            <div class="card-header custom-car-header rounded-top">
                Receta
            </div>
            <div class="card-body">
                <!-- La información de la receta se llenará aquí -->
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div id="examen-fisico" class="card">
            <div class="card-header custom-car-header rounded-top">
                Examen Físico
            </div>
            <div class="card-body">
                <!-- Los datos del examen físico se llenarán aquí -->
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
<script src="vendor/adminlte/dist/js/darkk.js"></script>
<script>
    $(document).ready(function() {
        let consultas = @json($consulta);

        $('#consulta-select').change(function() {
            let consultaId = $(this).val();
            let selectedConsulta = consultas.find(function(singleConsulta) {
                return singleConsulta.id_consulta == consultaId;
            });

            let fecha = new Date(selectedConsulta.fechaCo.replace('Z', ''));
            let fechaFormateada = fecha.toLocaleDateString('es-ES');

            let consultaInfoHtml = `
        <h6 class="card-header custom-car-header rounded-top">Consulta #${selectedConsulta.id_consulta}</h5>
        <p class="card-text">
        <p><label>Fecha: </label>${fechaFormateada}</p>
        <p><label>Hora: </label>${selectedConsulta.horaCo}</p>
        <p><label>Motivo: </label>${selectedConsulta.motivoCo}</p>
        <p><label>Observaciones: </label>${selectedConsulta.observacionesCo}</p>
        <p><label>Diagnóstico: </label>${selectedConsulta.diagnosticoCo}</p>
        <p><label>Médico: </label>${selectedConsulta.medico.nombreMe} ${selectedConsulta.medico.appMe} ${selectedConsulta.medico.apmMe}</p>

        </p>
            `;
            $('#consulta-info .card-body').html(consultaInfoHtml);
            $('#consulta-info').show();

            let examenFisico = selectedConsulta.examenFisico;

            let examenFisicoHtml = `
                <p><label>Presión arterial: </label> ${examenFisico.presionArterialEf}</p>
                <p><label>Temperatura: </label> ${examenFisico.temperaturaEf}</p>
                <p><label>Pulso: </label> ${examenFisico.pulsoEf}</p>
                <p><label>Peso: </label> ${examenFisico.pesoEf}</p>
                <p><label>Estatura: </label> ${examenFisico.estaturaEf}</p>
                <p><label>Evaluación Visual: </label> ${examenFisico.evaluacionVisualEf}</p>
                <p><label>Palpación: </label> ${examenFisico.palpacionEf}</p>
                <p><label>Auscultación: </label> ${examenFisico.auscultacionEf}</p>
                <p><label>Evaluación Neurológica: </label> ${examenFisico.evaluacionNeurologicaEf}</p>
                <p><label>Evaluación Respiratoria: </label> ${examenFisico.evaluacionRespiratoriaEf}</p>
                <p><label>Evaluación Sensorial: </label> ${examenFisico.evaluacionSensorialEf}</p>
            `;
            $('#examen-fisico .card-body').html(examenFisicoHtml);

            let receta = selectedConsulta.receta;

            let medicamentosHtml = '';
            console.log(receta)
            receta.medicamentos_recetados.forEach(medRecetado => {
                medicamentosHtml += `
                <br>
                <p><label>Medicamento recetado: </label>
        <p><label>Nombre: </label> ${medRecetado.medicamento.nombreMe}</p>
        <p><label>Descripción: </label> ${medRecetado.medicamento.descripcionMe}</p>
    `;
            });

            let recetaHtml = `
    <p><label>Instrucciones: </label> ${receta.instruccionesR}</p>
    ${medicamentosHtml}
`;

            $('#receta .card-body').html(recetaHtml);


        });

        $('#consulta-select').change();
    });
</script>
@stop