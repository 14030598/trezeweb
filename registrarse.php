<?php
    //include 'componentes/header.php';
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TREZE</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/bubbly.css">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

  </head>
  <body>
    <div class="caja">

      <form class="" action="" method="post" onsubmit="enviar(event, this)">
        <div class="iniciar_sesion">
      		<h2 class="form-titulo" id="iniciar_sesion">Registro</h2>
      		<div class="form-cuerpo">
            <input type="email" class="input" placeholder="Correo" title=""/>
      			<input type="text" class="input" placeholder="Usuario" title=""/>
      			<input type="password" class="input" placeholder="Password" />
      		</div>
      	</div>
        <div class="centrado">
          <button type="submit" class="bubbly-button">Crear cuenta</button>
        </div>

        <div class="">
          <h5 class="logo">|3 TREZE</h5>
        </div>
        <div class="botonera">
            <a class="iconos" href="index.php">Iniciar sesion <span class="fa fa-arrow-circle-right"></span> </a>
        </div>
      </form>
    </div>

    <script src="js/script_burbujas.js"></script>

    <script type="text/javascript">
        function enviar(evento, formulario){
          evento.preventDefault(); //Cancelo el envío
          setTimeout(function(){ //Aplico el temporizador
              formulario.submit(); //Envío los datos
          }, 3000);
        }
    </script>
  </body>
</html>
