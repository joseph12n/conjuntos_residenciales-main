
<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CASAS
				</h3>
			</div>
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="?c=Vehicle&a=typeCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR Tipo de vehiculo</a>
					</li>
					<li>
						<a href="?c=Vehicle&a=typeRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR Tipo de vehiculoS</a>
					</li>
					<li>
						<a href="#"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR Tipo de vehiculo</a>
					</li>
				</ul>
			</div>
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<tr class="text-center roboto-medium">
								<th>Código</th>
								<th>NOMBRE CASA</th>
								<th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($houses as $house) : ?>
								<tr class="text-center" >
									<td><?php echo $house->getCodHouse(); ?></td>
									<td><?php echo $house->getNameHouse(); ?></td>
									<td>
										<a href="?c=Users&a=houseUpdate&idhouse=<?php echo $house->getCodHouse(); ?>" class="btn btn-success">
											<i class="fas fa-sync-alt"></i>
										</a>
									</td>
									<td>
									<a href="?c=Users&a=houseDelete&idhouse=<?php echo $house->getCodHouse(); ?>" class="btn btn-warning">
											<i class="far fa-trash-alt"></i>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>

						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>