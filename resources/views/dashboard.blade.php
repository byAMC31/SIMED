@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<div class="custom-control custom-switch" align="right">
    <input type="checkbox" class="custom-control-input" id="darkModeToggle">
    <label class="custom-control-label" for="darkModeToggle">
        <span id="darkModeIcon" class="fas fa-moon" style="margin-right:10px;"></span>
        <span id="darkModeText">Modo oscuro</span>
    </label>
</div>

<center>
    <br>
    <h1>Bienvenido  {{ Auth::user()->name }}</h1>
    <br>
    <?php
    date_default_timezone_set('America/Mexico_City');
    $fechaHora = new DateTime();
    $fechaHora->setTimezone(new DateTimeZone('America/Mexico_City'));
    ?>
<p style="font-size: 20px;"><?php echo $fechaHora->format('d-m-Y'); ?></p>
<p id="time" style="font-size: 18px;"></p>
    </center>
@stop

@section('content')
<br>
<center>
<div class="card shadow rounded">
  <div class="card-header custom-car-header rounded-top  rounded">
    <h5 class="text-center">Avisos</h5>
  </div>
  <div class="card-body rounded-bottom">
    <p class="card-text">
      Este sistema medico permite a los usuarios programar citas médicas,
       llevar un registro de sus consultas previas, y recibir notificaciones 
       importantes relacionadas con su salud. Además, cuenta con un equipo de
        profesionales altamente capacitados, quienes están a su disposición para atender
         sus necesidades médicas.
    </p>
    <p class="card-text">
      Este nuevo sistema medico representa un gran avance en la calidad de la atención médica que 
      ofrecemos en nuestra universidad, y estamos emocionados de poder compartirlo con ustedes. 
      Esperamos que este servicio sea de gran ayuda para todos los miembros de nuestra comunidad 
      universitaria.
    </p>
  </div>
</div>

</div>


</center>
@stop

@section('css')
<style>
.custom-car-header {
  background-color: #A2ECD1; /* Cambiar este valor por el color deseado */
  color: black; /* Cambiar este valor por el color de texto deseado */
}

.card {
  max-width: 45rem;
  margin: auto;
  padding: 1rem;
}

@media only screen and (max-width: 600px) {
  .card {
    width: 100%;
  }
}
.dark-mode-text {
    color: white;
}

.light-mode-text {
    color: black;
}

</style>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    
</script>
<script src="vendor/adminlte/dist/js/darkk.js"></script>
<script src="vendor/adminlte/dist/js/horaFecha.js"></script>
@stop






