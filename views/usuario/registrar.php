<?php include_once('views/templates/header.php'); ?>

<?php include_once('views/templates/nav.php'); ?>

<section class="">
    <div class="container">
        <div class="my-5">
            <h2 class="text-center">Registro de Zapatos</h2>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto">
                <div><a class="btn-cliente" href="?c=lista">Registros</a></div>
                <div class="card">
                    <div class="card-body">
                        <form action="?c=guardar" enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    

                                <div class="form-group">
                                        <label for="">nombre</label>
                                        <input type="text" class="form-control" placeholder="corre" name="txtcorreo">
                                    </div>
                                    <div class="form-group">
                                        <label for="">nombre</label>
                                        <input type="text" class="form-control" placeholder="clave" name="txtclave">
                                    </div>
                                    <div class="form-group">
                                        <label for="">nombre</label>
                                        <input type="text" class="form-control" placeholder="nombre" name="txtnombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="">nombre</label>
                                        <input type="text" class="form-control" placeholder="foto" name="txtfoto">
                                    </div>
                                    <div class="form-group">
                                        <label for="">nombre</label>
                                        <input type="text" class="form-control" placeholder="telefono" name="txttelefono">
                                    </div>
                                    
                                </div>
 

                                    <div class="mt-2">
                                        <input type="submit" class="btn btn-success my-3" name="btnregistrar" value="Registrar Producto">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once('views/templates/footer.php'); ?>