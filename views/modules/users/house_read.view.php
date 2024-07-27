<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CASA
				</h3>

			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="?c=Users&a=houseCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CASA</a>
					</li>
					<li>
						<a href="?c=Users&a=houseRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR CASA</a>
					</li>
					<li>
						<a href="#"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR CASA</a>
					</li>
				</ul>
			</div>
    </form>
	<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Casas</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Codigo Casa</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Nombre Casa</th>
                                  <th><i class="fa fa-edit"></i> Actualizar/eliminar</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php foreach ($houses as $house) : ?>
                              <tr>
							  <td><?php echo $house->getHouseCode(); ?></td>
							  <td><?php echo $house->getHouseName(); ?></td>
                                  <td>
								  <a href="?c=Users&a=houseUpdate&idhouse=<?php echo $house->getHouseCode(); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>
								  <a href="?c=Users&a=houseDelete&idhouse=<?php echo $house->getHouseCode(); ?>"class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>
                                  </td>
                              </tr>
							  <?php endforeach; ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
