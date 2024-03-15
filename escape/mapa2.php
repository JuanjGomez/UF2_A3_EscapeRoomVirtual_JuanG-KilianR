<?php
session_start();

if(!isset($_SESSION['nombre'])){
    header("location: ./index.php?intruso=1");
}
if(!isset($_SESSION['superar'])){
    header('location: ./mapas.php');
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa 2</title>
    <link rel="icon" href="./icons/champi.ico">
    <link rel="stylesheet" type="text/css" href="./style/stylemapa2.css">
</head>
<body>
<marquee direction="right"><?php echo "Usuario: " . $_SESSION['nombre']?> --- Mapa: 2/5</marquee>
    <div id=contenedor>
        <h1>Mapa 2</h1>
        <div id="temporizador">Tiempo restante: <span id="cuentaregresiva">00:30</span></div>
        <script src="./javascript/contrarreloj.js"></script>
        </br>
        <strong>¿Cuál es el nombre del reino donde se desarrolla la mayoría de las aventuras de Mario?
        </strong>
        <form action="./conexiones/formulariomapa2.php" method="post">
            <label for="respuesta"></label>
            <input type="text" name="respuesta" id="respuesta">
            <button type="submit" name="boton">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

<?php
if (isset($_SESSION['alerta']) && $_SESSION['alerta'] == 'mal1') {
    echo    "<script> 
                Swal.fire({
                icon: 'error',
                title: 'Has fallado!!',
                text: 'PISTA: Recuerda que el nombre es reino... (mira el fondo de la página)'});
            </script>";
}
$_SESSION['alerta'] = 'no';

