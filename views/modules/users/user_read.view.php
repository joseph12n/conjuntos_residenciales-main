<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS
				</h3>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="?c=Users&a=userCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO USUARIO</a>
					</li>
					<li>
						<a class="active" href="?c=Users&a=userRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR USUARIOS</a>
					</li>
					<li>
						<a href="#"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO</a>
					</li>
				</ul>
				<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
						<thead>
							<tr class="text-center roboto-medium">
								<th>ROL</th>
								<th>CÓDIGO Usuario</th>
								<th>CASA (si es residente)</th>
								<th>NOMBRES</th>
								<th>APELLIDOS</th>
								<th>FECHA DE NACIMIENTO</th>
								<th>IDENTIFICACIÓN</th>
								<th>EMAIL</th>
								<th>TELEFONO</th>
								<th>ESTADO</th>
								<th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($users as $user) : ?>
								<tr>
									<td><?php echo $user->getRolName(); ?></td>
									<td><?php echo $user->getUserCode(); ?></td>
									<td><?php echo $user->getHouseName(); ?></td>
									<td><?php echo $user->getUserName(); ?></td>
									<td><?php echo $user->getUserLastName(); ?></td>
									<td><?php echo $user->getUserBirthday(); ?></td>
									<td><?php echo $user->getUserId(); ?></td>
									<td><?php echo $user->getUserEmail(); ?></td>
									<td><?php echo $user->getUserPhone(); ?></td>
									<td><?php echo $state[$user->getUserState()]; ?></td>
									<td>
										<a href="?c=Users&a=userUpdate&idUser=<?php echo $user->getUserCode(); ?>" class="btn btn-primary btn-xs">
											<i class="fa fa-pencil"></i>
										</a>
									</td>
									<td>
										<a href="?c=Users&a=userDelete&idUser=<?php echo $user->getUserCode(); ?>" class="btn btn-danger btn-xs">
											<i class="fa fa-trash-o"></i>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>