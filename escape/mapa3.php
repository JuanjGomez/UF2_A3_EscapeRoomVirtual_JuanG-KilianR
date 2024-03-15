<?php
session_start();

if(!isset($_SESSION['nombre'])){
    header("location: ./index.php?intruso=1");
}

if(!isset($_SESSION['superar2'])){
    header('location: ./mapas.php');
}

if (isset($_POST['boton1c'])){
    $_SESSION['alerta'] = 'acierto';
    $_SESSION['superar3'] = 1;
    header("Location: ./mapas.php");
    exit();
} 
if (isset($_POST['boton1b'])){
    $_SESSION['alerta'] = 'error';
}

if (isset($_POST['boton1a'])){
    $_SESSION['alerta'] = 'error';
}

if (isset($_POST['boton1d'])){
    $_SESSION['alerta'] = 'error';
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa 3</title>
    <link rel="icon" href="./icons/yoshi.ico">
    <link rel="stylesheet" type="text/css" href="./style/stylemapa3.css">
</head>
<body>
<marquee direction="right"><?php echo "Usuario: " . $_SESSION['nombre']?> --- Mapa: 3/5</marquee>
    <div id="contenedor">
        <h1>Mapa 3</h1>
        <div id="temporizador">Tiempo restante: <span id="cuentaregresiva">00:30</span></div>
        <script src="./javascript/contrarreloj.js"></script>
        </br>
        <strong>¿En qué juego de la serie "Mario Bros" se introduce por primera vez el personaje de 
        Yoshi?</strong>
        <hr>
        <form action="" method="post">
            <div class="portatil">
                <div class="resaltado"><button type="submit" name="boton1a">a| Super Mario Bros Wonder</button></div>
                <div class="resaltado"><button type="submit" name="boton1b">b| Mario Strikers</button></div>
            </div>
            <div class="portatil">
                <div class="resaltado"><button type="submit" name="boton1c">c| Super Mario World</button></div>
                <div class="resaltado"><button type="submit" name="boton1d">d| Super Mario Bross</button></div>
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
                text: 'PISTA: La inicial de la tercera palabra son dos v unidas.'});
            </script>";
}
$_SESSION['alerta'] = 'no';

?>