<?php
session_start();

if(!isset($_SESSION['nombre'])){
    header("location: ./index.php?intruso=1");
}

if(!isset($_SESSION['superar4'])){
    header('location: ./mapas.php');
}

if (isset($_POST['boton5d'])){
    $_SESSION['alerta'] = 'acierto';
    $_SESSION['superar4'] = 1;
    header("Location: ./congradulations.php");
    exit();
} 
if (isset($_POST['boton5b'])){
    $_SESSION['alerta'] = 'error';
}

if (isset($_POST['boton5a'])){
    $_SESSION['alerta'] = 'error';
}

if (isset($_POST['boton5c'])){
    $_SESSION['alerta'] = 'error';
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa 5</title>
    <link rel="stylesheet" type="text/css" href="./style/stylemapa5.css">
    <link rel="icon" href="./icons/m5.ico">
</head>
<body>
<marquee direction="right"><?php echo "Usuario: " . $_SESSION['nombre']?> --- Mapa: 5/5</marquee>
    <div id="contenedor">
        <h1>Mapa 5</h1>
        <div id="temporizador">Tiempo restante: <span id="cuentaregresiva">00:30</span></div>
        <script src="./javascript/contrarreloj.js"></script>
        </br>
        <strong>¿Cómo se llaman los habitantes más comunes del Reino Champiñon?</strong>
        <hr>
        <form action="" method="post">
            <div class="portatil">
                <div class="resaltado"><button type="submit" name="boton5a">a| Goombas</button></div>
                <div class="resaltado"><button type="submit" name="boton5b">b| Koopas</button></div>
            </div>
            <div class="portatil"> 
                <div class="resaltado"><button type="submit" name="boton5c">c| Champis</button></div>
                <div class="resaltado"><button type="submit" name="boton5d">d| Toads</button></div>
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
                text: 'PISTA: Son grandes organizadores de fiestas, usan gorras con forma de setas.'});
            </script>";
}
$_SESSION['alerta'] = 'no';

?>