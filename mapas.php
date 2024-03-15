<?php
session_start();

if(!isset($_SESSION['nombre'])){
    header("location: ./index.php?intruso=1");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapas</title>
    <link rel="icon" href="./icons/mapa.ico">
    <link rel="stylesheet" type="text/css" href="./style/pruebamapas.css">
</head>
<body>
    <header>
    <marquee direction="right"><?php echo "Usuario: " . $_SESSION['nombre']?> --- Modo historia</marquee>
            <div class="titulo">
                <img id="title" src="./img/MODOHISTORIA.png" alt="">
            </div>
            <div class="mapas5">
                <div class="borde">
                    <a href="./mapa1.php"><div class="col3 padding1"><img class="width" src="./img/MAPA1.1.png" alt=""><img id="superpuesta" src="./img/mario.webp" alt=""></div></a>
                </div>
                <div class="borde">
                    <a href="./mapa2.php"><div class="col3 padding1"><img class="width" src="./img/MAPA2.1.png" alt=""><img id="superpuesta2" src="./img/luigi1.png" alt=""></div></a>
                </div>
                <div class="borde">
                    <a href="./mapa3.php"><div class="col3 padding1"><img class="width" src="./img/MAPA3.1.png" alt=""><img id="superpuesta3" src="./img/mario2.png" alt=""></div></a>
                </div>
            </div>
            <div class="mapas5">
                <div>
                    <a href="./mapa4.php"><div class="borde"><div class="col2 padding1"><img class="width" src="./img/MAPA4.1.png" alt=""><img id="superpuesta4" src="./img/nube1.png" alt=""></div></div></a>
                </div>
                <div>
                    <a href="./mapa5.php"><div class="borde"><div class="col2 padding1"><img class="width" src="./img/MAPA5.1.png" alt=""><img id="superpuesta5" src="./img/a1.png" alt=""></div></div></a>
                </div>
            </div>
    </header>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php

if ($_SESSION['alerta'] == 'acierto'){
    echo    "<script>
                Swal.fire({
                icon: 'success',
                title: 'MUY BIEN !!',
                text: 'A por el siguiente mapa !'});
            </script>";
}
$_SESSION['alerta'] = 'no';
