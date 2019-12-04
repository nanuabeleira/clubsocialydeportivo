<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Club Xxx Nnn</title>
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">


  <body>
    <?php

    session_start();
    require_once 'controladores/helpers.php';
    require_once 'controladores/controladorValidacion.php';
    require_once 'controladores/controladorUsuario.php';

    pre($_SESSION);
    pre($_COOKIE);
    include_once ("header.php");

    ?>
    <h1>Bienvenido a la página del Club</h1>
    <p>Web para clubs deportivos y red social para sus miembros.
Objetivo: Poder ofrecer a los clubes de Mendoza, luego el mundo una página web<br>
	<p>1er meta: Registro de usuarios </p>
	<p>2da meta: Pagina de noticias</p>
	<p>3er meta: Que los socios / usuarios registrados puedan interactuar con las notas publicadas</p>
	<p>4ta meta: Poder gestionar la base de datos de los socios/atletas para análisis de datos. Que profesores de diferentesdeportes pueda ir cargando los resultados del atleta en la base de datos</p>
	<p>5ta meta: Poder cobrar cuota social por la página</p>
</p>

<footer>
  <?php
include_once ("footer.php")
 ?>
</footer>
  </body>
</html>
