<?php include_once('cuerpo/header.php'); ?>


<div class="row">
	<div class="col-12 col-lg-12 col-xxl-12 d-flex">
		<div class="card flex-fill">
			<div class="card-header">
				<h1 class="text-center text-danger">Listado de Clientes</h1>
			</div>


			<table class="table table-hover my-0">
				<thead>
					<tr>
						<th class="d-none d-xl-table-cell">ID</th>
						<th class="d-none d-xl-table-cell">DNI</th>
						<th class="d-none d-xl-table-cell">Nombre</th>
						<th class="d-none d-xl-table-cell">Correo</th>
						<th class="d-none d-xl-table-cell">Saldo Soles </th>
						<th class="d-none d-md-table-cell">Saldo Aqu</th>
					</tr>
				</thead>
				<tbody>
	  <?php foreach ($this->MODEL->listarProcesoVerificar() as $new) : ?>
          <tr>
            <td><?php echo $new->idproceso; ?></td>
			<td><?php echo $new->idusuario; ?></td>
			<td><?php echo $new->idbanco; ?></td>
			<td><?php echo $new->condicion; ?></td>
			<td><?php echo $new->montoproceso; ?></td>
			<td><?php echo $new->procesoTexto; ?></td>
			<td><?php echo $new->foto; ?></td>
          </tr>
        <?php endforeach; ?>

				</tbody>
			</table>
		</div>
	</div>

</div>
<?php include_once('cuerpo/nav.php'); ?>