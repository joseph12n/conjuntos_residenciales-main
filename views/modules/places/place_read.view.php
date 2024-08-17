	<!-- Page header -->
    <div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE LUGARES
				</h3>
			</div>
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="?c=Places&a=placeCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar lugar</a>
					</li>
					<li>
						<a class="active" href="?c=Places&a=placeRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Consultar lugar</a>
					</li>
					<li>
						<a href="?c=Places&a=placeUpdate"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar lugar</a>
					</li>
				</ul>
			</div>
    </form>
	<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> LUGARES</h4>
	                  	  	  <hr>
                              <thead>
                              <tr class="text-center roboto-medium">
                                  <th><i class="fa fa-bullhorn"></i> Codigo lugar</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Nombre lugar</th>
                                  <th><i class="fa fa-edit"></i> Actualizar/eliminar</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php foreach ($places as $place) : ?>
                              <tr>
							  <td><?php echo $place->getPlaceCode(); ?></td>
							  <td><?php echo $place->getPlaceName(); ?></td>
							  <td>
							  <a href="?c=Places&a=placeUpdate&idplace=<?php echo $place->getPlaceCode(); ?>" class="btn btn-primary btn-xs" ><i class="fa fa-pencil"></i>
							  <a href="?c=Places&a=placeDelete&idplace=<?php echo $place->getPlaceCode(); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>
                                  </td>
                              </tr>
							  <?php endforeach; ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->