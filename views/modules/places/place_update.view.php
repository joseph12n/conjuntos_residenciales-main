			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-plus fa-fw"></i> &nbsp; ACTUALIZAR ROL
				</h3>
				<p class="text-justify">
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="?c=Places&a=placeUpdate"><i class="fas fa-plus fa-fw"></i> &nbsp; ACTUALIZAR LUGAR</a>
					</li>
					<li>
						<a href="?c=Places&a=placeRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR lUGARES</a>
					</li>
				</ul>
			</div>
			<div class="container-fluid">
			<form action="" method="POST" class="form-neon" autocomplete="off" name="form_place_update">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Actualizar lugar</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<input type="hidden" class="form-control" name="cod_place" id="cod_place" value="<?php echo $placeId->getPlaceCode(); ?>">
									<div class="form-group">
										<label for="Placename" class="bmd-label-floating">Nombre lugar</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="place_name" id="place_update_name" maxlength="40" value="<?php echo $placeId->getPlaceName(); ?>">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-raised btn-info btn-sm" id="submit-update-place"><i class="far fa-save"></i> &nbsp; ACTUALIZAR</button>
					</p>
				</form>
			</div>