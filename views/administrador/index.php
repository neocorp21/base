<?php include_once('cuerpo/header.php'); ?>


<div class="row">
	<div class="col-12 col-lg-12 col-xxl-12 d-flex">
		<div class="card flex-fill">
			<div class="card-header">
				<h1 class="text-center text-danger"> Evaluacion de deposito</h1>
			</div>


			<table class="table table-hover my-0">
				<thead>
					<tr>
						<th class="d-none d-xl-table-cell">idProceso</th>
						<th class="d-none d-xl-table-cell">idusuario</th>
						<th class="d-none d-xl-table-cell">Nombre</th>
						<th class="d-none d-xl-table-cell">Correo</th>
						<th class="d-none d-xl-table-cell">Accion</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($this->MODEL->listarProcesoVerificar() as $new) : ?>
						<tr>
							<td><?php echo $new->idproceso; ?></td>
							<td><?php echo $new->idusuario; ?></td>
							<td><?php echo $new->nombre; ?></td>
							<td><?php echo $new->correo; ?></td>


							<td>
								<form method="post" action="?c=procesarHistorial">

									<?php echo '<input type="hidden" name="txtidproceso" id="txtidproceso"   value="' . $new->idproceso . '">'; ?>

									<button type="submit" class="btn btn-primary">Evaluar</button>

								</form>
							</td>

						</tr>
					<?php endforeach; ?>

				</tbody>
			</table>
		</div>
	</div>

</div>
<?php include_once('cuerpo/nav.php'); ?>