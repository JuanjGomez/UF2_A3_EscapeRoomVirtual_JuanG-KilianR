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
        <marquee direction="up">
            <h1 class="right" id="title">Felicidades <?php echo $_SESSION['nombre']?> has superado el juego !!</h1>
            <h3>Has demostrado ser un fan de Mario Bros!</h3>
            </br>
            <hr>
            <h2>Creadores:</h2>
            <hr>
            <br>
            <h3>Kilian Ruiz</h3>
            <h3>&</h3>
            <h3>Juan Gómez</h3>
            <br>
            <hr>
            <h3>¿Quieres jugar otra vez?</h3>
            <hr>
            <div>
                <form action="./conexiones/destruccion.php" method="post" id="sessiones">
                    <!-- <strong for="restart">Deseas volver hacer el:</strong> -->
                    <button type="submit">REPETIR</button>
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