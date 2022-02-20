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
	  <?php foreach ($this->MODEL->listar() as $new) : ?>
          <tr>
            <td><?php echo $new->idusuario; ?></td>
			<td><?php echo $new->nombre; ?></td>
			<td><?php echo $new->dni; ?></td>
			<td><?php echo $new->correo; ?></td>
			<td><?php echo $new->saldoactual; ?></td>
			<td><?php echo $new->saldoaqu; ?></td>
          </tr>
        <?php endforeach; ?>

				</tbody>
			</table>
		</div>
	</div>

</div>
<?php include_once('cuerpo/nav.php'); ?>