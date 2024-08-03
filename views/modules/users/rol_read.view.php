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
    </form>
	<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Roles</h4>
	                  	  	  <hr>
                              <thead>
                              <tr class="text-center roboto-medium">
                                  <th><i class="fa fa-bullhorn"></i> Codigo Rol</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Nombre Rol</th>
                                  <th><i class="fa fa-edit"></i> Actualizar/eliminar</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php foreach ($roles as $rol) : ?>
                              <tr>
							  <td><?php echo $rol->getRolCode(); ?></td>
							  <td><?php echo $rol->getRolName(); ?></td>
                                  <td>
								  <a href="?c=Users&a=rolUpdate&idRol=<?php echo $rol->getRolCode(); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>
								  <a href="?c=Users&a=rolDelete&idRol=<?php echo $rol->getRolCode(); ?>"class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>
                                  </td>
                              </tr>
							  <?php endforeach; ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
