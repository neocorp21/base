<?php include_once('views/templates/header.php'); ?>

<?php include_once('views/templates/nav.php'); ?>
<section>
<div class="container">
 
        <div class="card text-center">
          <div class="card-header"> <H1>  Datos del Usuario</H1>   </div>
          
        </div>
 
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">clave</th>
      <th scope="col">nombre</th>
      <th scope="col">telefono</th>
      <th scope="col">saldoactual</th>
      <th scope="col">saldoaqu</th>
      
    </tr>
  </thead>
  <tbody>
              
                <?php foreach ($this->MODEL->listar() as $new) : ?>
                  <tr>
                     <td><?php echo $new->nombre; ?></td>
                     <td><?php echo $new->nombre; ?></td>
                     <td><?php echo $new->nombre; ?></td>
                    
                  </tr>
                <?php endforeach; ?>
            
              </tbody>
            </table>
       
  
</section>
<div class="form-group">
                                        

  <?php include_once('views/templates/footer.php'); ?>