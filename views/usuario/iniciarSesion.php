<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title> Document</title>
    <link rel="stylesheet" href="css/estilos.css">


</head>
<body>
<form class="form"  action="?c=Log" enctype="multipart/form-data" method="POST">
        <h2 class="form_title">Iniciar Sesión</h2>
        <img src="imagenes/logo_aqku.png" width="150" height="150" margin bottom="150" >
        
        
        <div class="form_container">
            <div class="form_group">
                <input type="email"  name="txtcorreo" class="form_input" placeholder=" " required:>
                <label for="name" class="form_label">Correo Electronico:</label>
                <span class="form_line"></span>
            </div>

           

            <div class="form_group">
                <input type="password" name="txtclave" class="form_input" placeholder=" " required:>
                <label for="name" class="form_label">Contraseña:</label>
                <span class="form_line"></span>
            </div>

         

            <p class="form_paragraph">¿Aun no tienes cuenta?<a href="./index.php?c=nuevo"class="form_link"> Registrate</a></p>

            <input type="submit" class="form_submit" value="Entrar">
        
        </div>
    
    </form>


</body>



</html>