<?php

session_start();
$respuestaOK = "reino champiñon";
$respuestaIngresada = $_POST['respuesta'];
$respuestaIngresada = strtolower($respuestaIngresada);

if ($respuestaIngresada != $respuestaOK){
       header('location: ../mapa2.php');
       $_SESSION['alerta'] = 'mal1';
} else {
       $_SESSION['superar2'] = 1;
       $_SESSION['alerta'] = 'acierto';
       header('location: ../mapas.php');
}



