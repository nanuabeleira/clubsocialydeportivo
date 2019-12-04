<?php

$errores = [];
$nombre = "";
$email = "";

if($_POST) {
    if(isset($_POST['nombre'])) {
        if(empty($_POST['nombre'])) {
            $errores['nombre'] = "campo obligatorio";
        }
        elseif(empty($_POST['nombre']) || strlen($_POST['nombre']) <= 2) {
            $errores['nombre'] = "al menos 3 caracteres";
        } else {
            $nombre = $_POST['nombre'];
        }
    }

    if(isset($_POST['email'])) {
        if(empty($_POST['email'])) {
            $errores['email'] = "campo obligatorio";
        }
        elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = "Ingrese un email válido";
        }
        else {
            $email = $_POST['email'];
        }
    }

    if(count($errores) == 0) {
        header('Location: felicitaciones.php');
    }

}

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>TEST</title>
    <link href="https://fonts.googleapis.com/css?family=Public+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Public Sans', sans-serif
        }
        small {
            font-size: 15px;
            color: black;
            display: block;
        }
    </style>
</head>
<body>
    <!-- <form action="imprimir.php" method="get"> -->
    <h1>Sus datos</h1>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?= $nombre ?>">
        <small><?= (isset($errores['nombre'])) ? $errores['nombre'] : "" ?></small>
        <br>
        <label for="email">E-mail:</label>
        <input type="text" name="email" value="<?= $email ?>">
        <small><?= (isset($errores['email'])) ? $errores['email'] : "" ?></small>
        <small></small>
        <br>
        <br>
        <input type="submit">
    </form>
</body>
</html>
