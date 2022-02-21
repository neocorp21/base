<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
         
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/estilos3.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src=""></script>
</head>

<body>
    

    <form class="form">
        <p class="page-title">Perfil</p>


        <img src="imagenes/avatars/user.webp" class="border-perfil" width="150" height="150">


        <div class="form_container">
            <div class="form_group">
                <input type="text" id="name" class="texto_perfil" placeholder=" " disabled="disabled">
   <label for="name" class="form_label_perfil"><span class="bi bi-person-fill">  <?php  echo  $_SESSION['nombreUsuario']    ?>  </span></label>
   
   
            </div>

            <div class="form_group">
                <input type="text"   class="texto_perfil" placeholder=" " disabled="disabled">
                <label for="name" class="form_label_perfil"><span class="bi bi-xbox"> <?php  echo   $_SESSION['dniUsuario']   ?> </span></label>
            </div>


            <div class="form_group">
                <input type="text" id="name" class="texto_perfil" placeholder=" " disabled="disabled">
                <label for="name" class="form_label_perfil"><span class="bi bi-envelope"> <?php  echo   $_SESSION['correoUsuario']    ?> </span></label>
            </div>

            <input type="submit" class="form_submit" value="Depositar">
        </div>
        &nbsp;

        <div class="navigation">
            <ul>
                <li class="list active">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Home</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="text">Perfil</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="text">Setting</span>
                    </a>
                </li>
                
                <li class="list">
                    
                    <a href="?c=cerrarSesion">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="text">Salir</span>
                    </a>
                </li>
                <div class="indicator"></div>
            </ul>
        </div>

    </form>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>