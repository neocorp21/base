<?php include_once('cuerpo/header.php'); ?>
<?php $idproceso = $_POST['txtidproceso']; ?>

<div class="row">
	<div class="col-12 col-lg-12 col-xxl-12 d-flex">
		<div class="card flex-fill">
			<div class="card-header">
				<h1 class="text-center text-danger">Procesar Evaluacion</h1>
			</div>

			<form class="form" action="?c=Log" enctype="multipart/form-data" method="POST">
				<?php foreach ($this->MODEL->ObtenerDatosProcesoEvaluar($idproceso) as $new) : ?>
					<input type="text" name="txtidproceso" value="<?php echo $new->idproceso; ?>">
					<input type="text" name="txtidusuario" value="<?php echo $new->idusuario; ?>">
					<input type="text" name="txtsaldoanterior" value="<?php echo $new->saldoAnterior; ?>">
					<input type="text" value="<?php echo $new->foto; ?>">
					<input type="text" name="txtmontoproceso" value=" ">
				<?php endforeach; ?>
				<input type="submit" class="form_submit" value="Confimar">
			</form>

		</div>
	</div>

</div>
<?php include_once('cuerpo/nav.php'); ?>