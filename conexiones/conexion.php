<?php
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];

    if($nombre != "" && $contraseña != ""){
        session_start();
        $_SESSION['nombre'] = $nombre;
        header('location: ../mapas.php'); 
    } else {
        header('location: ../index.php?error=1');
    }
