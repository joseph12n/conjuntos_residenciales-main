
<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-plus fa-fw"></i> &nbsp; ACTUALIZAR tipo de vehiculo
				</h3>
				<p class="text-justify">
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
			<div class="container-fluid">
				<form action="" method="POST" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Actualizar tipo de vehiculo</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
                                <input type="hidden" class="form-control" name="cod_type" id="cod_type" value="<?php echo $typeId->getTypeCode();?>">
									<div class="form-group">
										<label for="vehicle_type" class="bmd-label-floating">Nombre</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-conttrol" name="vehicle_type" id="vehicle_type" maxlength="40" value="<?php echo $typeId->getVehicleType();?>">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; ACTUALIZAR</button>
					</p>
				</form>
			</div>