			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ROLES
				</h3>
			</div>
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="?c=Users&a=rolCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR ROL</a>
					</li>
					<li>
						<a class="active" href="?c=Users&a=rolRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR ROLES</a>
					</li>
					<li>
						<a href="#"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR ROL</a>
					</li>
				</ul>
			</div>
        <table class="table">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>Codigo Rol</th>
                    <th>Nombre Rol</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
			<?php foreach ($roles as $rol) : ?>
								<tr class="text-center" >
									<td><?php echo $rol->getRolCode(); ?></td>
									<td><?php echo $rol->getRolName(); ?></td>
									<td>
										<a href="?c=Users&a=rolUpdate&idRol=<?php echo $rol->getRolCode(); ?>" class="btn btn-success">
											<i class="fas fa-sync-alt"></i>
										</a>
									</td>
									<td>
									<a href="?c=Users&a=rolDelete&idRol=<?php echo $rol->getRolCode(); ?>" class="btn btn-warning">
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
                <li class="page-item"><a class="page-link" href="#">2</a></3</a></li></a>
                </li>
            </ul>
        </nav>
    </form>