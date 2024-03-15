<?php
session_start();

if(!isset($_SESSION['nombre'])){
    header("location: ./index.php?intruso=1");
}

if(!isset($_SESSION['superar3'])){
    header('location: ./mapas.php');
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa 4</title>
    <link rel="stylesheet" type="text/css" href="./style/stylemapa4.css">
    <link rel="icon" href="./icons/car.ico">
</head>
<body>
<marquee direction="right"><?php echo "Usuario: " . $_SESSION['nombre']?> --- Mapa: 3/5</marquee>
    <div id=contenedor>
        <h1>Mapa 4</h1>
        <div id="temporizador">Tiempo restante: <span id="cuentaregresiva">00:30</span></div>
        <script src="./javascript/contrarreloj.js"></script>
        </br>
        <strong>¿Cuál es el nombre de la compañía ficticia que aparece en los juegos de la serie "Mario 
        Kart" como patrocinador de las pistas?</strong>
        <form action="./conexiones/formulariomapa4.php" method="post">
            <label for="respuesta"></label>
            <input type="text" name="respuesta">
            <button type="submit" name="boton">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<?php
if (isset($_SESSION['alerta']) && $_SESSION['alerta'] == 'MAL') {
    echo    "<script> 
                Swal.fire({
                icon: 'error',
                title: 'Has fallado!!',
                text: 'PISTA: Dos palabras: Un nombre de los personajes y lee nombre del juego.'});
            </script>";
}
$_SESSION['alerta'] = 'no';