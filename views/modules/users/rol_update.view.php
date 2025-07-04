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
						<a class="active" href="?c=Users&a=rolUpdate"><i class="fas fa-plus fa-fw"></i> &nbsp; ACTUALIZAR ROL</a>
					</li>
					<li>
						<a href="?c=Users&a=rolRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR ROLES</a>
					</li>
				</ul>
			</div>
			<div class="container-fluid">
				<form action="" method="POST" class="form-neon" autocomplete="off" name="form_update_rol">
					<fieldset>
						<legend><i class="fas fa-user-shield"></i> &nbsp; Actualizar Rol</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<input type="hidden" class="form-control" name="cod_rol" id="cod_rol" value="<?php echo $rolId->getRolCode(); ?>">
									<div class="form-group">
										<label for="rol_name" class="bmd-label-floating">Nombre</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="rol_name" id="rol_update_name" maxlength="40" value="<?php echo $rolId->getRolName(); ?>">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-raised btn-info btn-sm" id="submit-update-rol"><i class="far fa-save"></i> &nbsp; ACTUALIZAR</button>
					</p>
				</form>
			</div>