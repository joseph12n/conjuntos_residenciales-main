
<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CASAS
				</h3>
			</div>
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="?c=Vehicles&a=typeCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR Tipo de vehiculo</a>
					</li>
					<li>
						<a href="?c=Vehicles&a=typeRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR Tipo de vehiculoS</a>
					</li>
					<li>
						<a href="#"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR Tipo de vehiculo</a>
					</li>
				</ul>
			</div>
			
<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> tipos de vehiculo</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Codigo tipo de vehiculo</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i>Nombre tipo de vehiculo</th>
                                  <th><i class="fa fa-edit"></i> Actualizar/eliminar</th>
                                  <th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($types as $type) : ?>
								<tr>
									<td><?php echo $type->getTypeCode(); ?></td>
									<td><?php echo $type->getVehicletype(); ?></td>
									<td>
									<a href="?cVehicles&a=typeUpdate&idtype=<?php echo $type->getTypeCode(); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>
									<a href="?cVehicles&a=typeDelete&idtype=<?php echo $type->getTypeCode(); ?>"class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>