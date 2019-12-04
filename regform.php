<?php
//Añadiremos validación para el formulario de registración. Para esto te sugerimos
//algunos factores para tener en cuenta:
//a. Una buena estrategia es que el formulario de registración haga un pedido por
//POST hacia el mismo archivo. Esto permite que primero valides y luego lo envíes
//a la página de éxito.
//b. Es importante validar primero que nada si el usuario envió información.

//4

//c. Si el usuario efectivamente envió información deberías validar campo por
//campo tomando el enfoque de “preguntar si hay un error en el campo”.
//d. Es importante acumular todos los errores para poder mostrarlos de forma
//ordenada en el HTML.
//e. Si tras todas las validaciones no hay ningún error, deberías redirigir al usuario a
//la página de éxito.
//f. Para redirecciones ver header('Location: http://www.example.com/');
//7. En caso de que el formulario traiga errores tenés persistir los datos que el usuario ya
//había enviado en el formulario.

//VERSIÓN NINJA: ¡En ésta versión sería ideal persistir sólo aquellos campos que no hayan
//tenido errores! ¿Se te ocurre cómo hacerlo?

if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    // El nombre y contraseña son campos obligatorios
    if(empty($_POST["name"])){
        $errores[] = "El nombre es requerido";
    }
    if(empty($_POST["password"]) || strlen($_POST["password"]) < 5){
        $errores[] = "La contraseña es requerida y ha de ser mayor a 5 caracteres";
    }
    // El email es obligatorio y ha de tener formato adecuado
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){
        $errores[] = "No se ha indicado email o el formato no es correcto";
    }
    // El sitio web es obligatorio y ha de tener formato adecuado
    //if(!filter_var($_POST["sitioweb"], FILTER_VALIDATE_URL) || empty($_POST["sitioweb"])){
      //  $errores[] = "No se ha indicado sitio web o el formato no es correcto";
    }
    // Si el array $errores está vacío, se aceptan los datos y se asignan a variables



 ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php
include_once("header.php");
 ?>
 <div id='fg_membersite'>
     <form id='register' action='regform.php' method='post'>
         <fieldset >
             <legend>Registrate</legend>

             <input type='hidden' name='submitted' id='submitted' value='1'/>

             <div><span class='error'></span></div>
             <div class='container'>
                 <label for='name' >Nombre completo: </label><br/>
                 <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                 <span id='register_name_errorloc' class='error'></span>
             </div>
             <div class='container'>
                 <label for='email' >Email:</label><br/>
                 <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                 <span id='register_email_errorloc' class='error'></span>
             </div>
             <div class='container'>
                 <label for='username' >Nombre de usuario*:</label><br/>
                 <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                 <span id='register_username_errorloc' class='error'></span>
             </div>
             <div class='container' style='height:80px;'>
                 <label for='password' >Contaseña*:</label><br/>
                 <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                 <input type='password' name='password' id='password' maxlength="50" />
                 <div id='register_password_errorloc' class='error' style='clear:both'></div>
             </div>

             <div class='container'>
                 <input type='submit' name='Submit' value='Enviar' />
             </div>

         </fieldset>
     </form>
<?php
include_once("footer.php")
 ?>
