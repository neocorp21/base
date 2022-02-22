 
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title> Registro de Usuarios</title>
    <link rel="stylesheet" href="css/estilos.css"> <!--registro-->
 

</head>
<body>
        <form class="form"  action="?c=guardar" enctype="multipart/form-data" method="POST">
        <h2 class="form_title">Crear Cuenta</h2>
        <img src="imagenes/logo_aqku.png" width="150" height="150" margin bottom="150" >
       
           <div class="form_container">
            <div class="form_group">
                <input type="email"  name="txtcorreo" class="form_input" placeholder=" ">
                <label for="name" class="form_label">Correo Electronico:</label>
                <span class="form_line"></span>
            </div>

            <div class="form_group">
                <input type="text"  name="txtnombre" class="form_input" placeholder=" ">
                <label for="name" class="form_label">Nombre:</label>
                <span class="form_line"></span>
            </div>

            <div class="form_group">
                <input type="password"  name="txtclave"   class="form_input" placeholder="  ">
                <label for="name" class="form_label">Contraseña:</label>
                <span class="form_line"></span>
            </div>

            <div class="form_group">
                <input type="text"  name="txtdni"  class="form_input" placeholder=" ">
                <label for="name" class="form_label">DNI:</label>
                <span class="form_line"></span>
            </div>

        

            <p class="form_paragraph">¿Ya tienes cuenta?<a href="./index.php?c=iniciarSesion" class="form_link"> Iniciar Sesion </a></p>

            <input type="submit" class="form_submit" value="Entrar">
          
        
        </div>
    
    </form>


</body>



</html>