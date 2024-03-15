<?php
session_start();

if(!isset($_SESSION['nombre'])){
    header("location: ./index.php?intruso=1");
}

if (isset($_POST['boton1a'])){
    $_SESSION['alerta'] = 'acierto';
    $_SESSION['superar'] = 1;
    header("Location: ./mapas.php");
    exit();
} 
if (isset($_POST['boton1b'])){
    $_SESSION['alerta'] = 'error';
}

if (isset($_POST['boton1c'])){
    $_SESSION['alerta'] = 'error';
}

if (isset($_POST['boton1d'])){
    $_SESSION['alerta'] = 'error';
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa 1</title>
    <link rel="icon" href="./icons/mario.ico">
    <link rel="stylesheet" type="text/css" href="./style/stylemapa1.css">
</head>
<body>
    <marquee direction="right"><?php echo "Usuario: " . $_SESSION['nombre']?> --- Mapa: 1/5</marquee>
    <div id=contenedor>
        <h1>Mapa 1</h1> 
        <div id="temporizador">Tiempo restante: <span id="cuentaregresiva">00:30</span></div>
        <script src="./javascript/contrarreloj.js"></script>
        </br>
        <strong>¿Quién es el creador original de Super Mario Bros?</strong>
        <hr>
        <form action="" method="post">
            <div class="portatil">
                <div class="resaltado"><button type="submit" name="boton1a">a| Shigeru Miyamoto</button></div>
                <div class="resaltado"><button type="submit" name="boton1b">b| Hirokazu Yasuhara</button></div>
            </div>
            <div class="portatil">
                <div   class="resaltado"><button type="submit" name="boton1c">c| Alan Blaine</button></div>
                <div class="resaltado"><button type="submit" name="boton1d">d| Shinji Mikami</button></div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

<?php
if (isset($_SESSION['alerta']) && $_SESSION['alerta'] == 'error') {
    echo    "<script> 
                Swal.fire({
                icon: 'error',
                title: 'Has fallado!!',
                text: 'PISTA: El nombre del creador termina en u.'});
            </script>";
}
$_SESSION['alerta'] = 'no';

?>



