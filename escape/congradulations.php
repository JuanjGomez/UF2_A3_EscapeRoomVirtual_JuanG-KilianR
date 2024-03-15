<?php
session_start();

if(!isset($_SESSION['nombre'])){
    header("location: ./index.php?intruso=1");
}

if(!isset($_SESSION['superar4'])){
    header('location: ./mapas.php');
}

?>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/gradution.css">
    <link rel="icon" href="./icons/win.ico">
    <title>Congratulations</title>
</head>
<header>
    <marquee direction="right"><?php echo "Usuario: " . $_SESSION['nombre']?> --- Lo has logrado Crack</marquee>
</header>
<body>
    <section>
        <h1 class="right" id="title">Felicidades lo has logrado <?php echo $_SESSION['nombre']?>..!!</h1>
        <strong id ="text" class="right">Si que eres un verdadero fan de Mario Bros.</strong>
        </br>
        <h2 class="creditos left">Creadores:</h2>
        <h3 class="creditos left">Juan Gómez y Kilian Ruiz</h3>
        </br>
        <h2 id="title" class="right">¿Te ha gustado?</h2>
        <strong id ="text" class="right">Puede ver otro proximamente...</strong>
        <div id="cont"></div>
        </br>
        <h3 class="creditos left">¿Deseas jugar de nuevo?</h3>
        <div class="creditos left">
            <form action="./conexiones/destruccion.php" method="post" id="sessiones">
                <strong for="restart">Deseas volver hacer el:</strong>
                <button type="submit">Reto</button>
            </form>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

<?php
if ($_SESSION['alerta'] == 'acierto'){
    echo    "<script>
                Swal.fire({
                icon: 'success',
                title: 'MUY BIEN !!',
                text: 'Te has pasado el juego !'});
            </script>";
}
$_SESSION['alerta'] = 'no';