<?php include_once('views/templates/header.php'); ?>

<?php include_once('views/templates/nav.php'); ?>


<section>
  <div class="container">
    <h1 class="text-center">Lista de zapatos</h1>
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div><a class="btn-cliente" href="?c=nuevo">Nuevo Registro</a></div>
        <div class="card">
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Foto</th>
               
                </tr>
              </thead>

              <tbody>
              
                <?php foreach ($this->MODEL->listar() as $new) : ?>
                  <tr>
                     <td><?php echo $new->nombre; ?></td>
                   
                    
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include_once('views/templates/footer.php'); ?>