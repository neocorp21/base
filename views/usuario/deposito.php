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
     <title> Registro de Usuarios</title>
     <link rel="stylesheet" href="css/estilos.css">
     <!--registro-->


 </head>

 <body>
     <form class="form" action="?c=guardarProceso" enctype="multipart/form-data" method="POST">
         <p>Texto Informativo </p>

         <div class="form_container">

             <div class="form_group">
                 <Select class="form-control" name="txtidbanco" id="txtidbanco">
                     <?php foreach ($this->MODEL->listarBanco() as $new) : ?>
                         <option value="<?php echo $new->idbanco; ?>"> <?php echo $new->nombre; ?> </option>
                         <?php $var=1; ?><!--Variable a cambiar-->
                         <?php endforeach; ?>
                 </select>
              <p class="form-control">
              
               <?php foreach ($this->MODEL->buscarNumeroBanco($var) as $new) : ?>
                 <p  >Numero de cuenta : <?php echo $new->numerocuenta; ?> </p>
                 <p  >Titular de la cuenta : <?php echo $new->titularcuenta; ?> </p>
             <?php endforeach; ?>
             </p>

             </div>

             <div class="form_group">
                 <input type="text" name="txtfoto" class="form_input" placeholder="  ">
                 <label for="name" class="form_label">Foto</label>
                 <span class="form_line"></span>
             </div>




               

             <input type="submit" class="form_submit" value="Depositar">


         </div>

     </form>


 </body>



 </html>