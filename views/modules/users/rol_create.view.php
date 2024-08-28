			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR ROL
				</h3>

			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="?c=Users&a=rolCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR ROL</a>
					</li>
					<li>
						<a href="?c=Users&a=rolRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR ROLES</a>
					</li>
					<li>
						<a href="#"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR ROL</a>
					</li>
				</ul>
			</div>
			<div class="container-fluid">
				<form action="" method="POST" class="form-neon" autocomplete="off" name="form_rol">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Agregar Rol</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="form-group">
									<label for="nombreRol">Nombre del Rol:</label>
									<input type="text" class="form-control" name="rol_name" id="rol_name" maxlength="40">
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-primary">Limpiar</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-primary" id="submit-rol">Agregar Rol</button>
					</p>
				</form>
			</div>