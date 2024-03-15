<?php
              
session_start();
$respuestaOK = "mario motors";
$respuestaIngresada = $_POST['respuesta'];
$respuestaIngresada = strtolower($respuestaIngresada);

if ($respuestaIngresada != $respuestaOK){
       header('location: ../mapa4.php');
       $_SESSION['alerta'] = 'MAL';
} else {
       $_SESSION['superar4'] = 1;
       $_SESSION['alerta'] = 'acierto';
       header('location: ../mapas.php');
}

