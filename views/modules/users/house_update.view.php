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
				</ul>
			</div>
			<div class="container-fluid">
			<form action="" method="POST" class="form-neon" autocomplete="off" id="form_house_update">
		<fieldset>
			<legend><i class="fas fa-user"></i> &nbsp; Actualizar Casa</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6">
						<input type="hidden" class="form-control" name="cod_house" id="cod_house" value="<?php echo $houseId->getHouseCode(); ?>">
						<div class="form-group">
							<label for="house_name" class="bmd-label-floating">Nombre</label>
							<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="house_name" id="house_name_update" maxlength="40" value="<?php echo $houseId->getHouseName(); ?>">
						</div>
					</div>
				</div>
			</div>
		</fieldset>
		<br><br><br>
		<p class="text-center" style="margin-top: 40px;">
			<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
			&nbsp; &nbsp;
			<button type="submit" class="btn btn-raised btn-info btn-sm" id="submit-update-house"><i class="far fa-save"></i> &nbsp; ACTUALIZAR</button>
					</p>
				</form>
			</div>