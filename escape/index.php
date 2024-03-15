<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="icon" href="./icons/registro.ico">
    <link rel="stylesheet" type="text/css" href="./style/styleindex.css">
</head>
<body>
    <div id="todo">
        <div id="titulo">
            <img src="./img/MARIOBROS.png" alt="">
        </div>
        <div id="login">
            <form action="./conexiones/conexion.php" method="post" id="sesion">
                <label for="nombre">Nombre usuario:</label>
                <br>
                <br>
                <input type="text" name="nombre" id="nombre" >
                <br>
                <br>
                <label for="contraseña">Contraseña:</label>
                <br>
                <br>
                <input type="password" name="contraseña" id="contraseña" >
                <br>
                <br>
                <button type="submit" name="submit">¡Vamos a jugar!</button>
                <img id="mario" src="./img/mario1.png" alt="">
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
echo '...';