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
				<form action="" method="POST" class="form-neon" autocomplete="off" name="form_house">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Agregar CASA</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="form-group">
									<label for="nombrehouse">Nombre de la casa:</label>
									<input type="text" class="form-control" name="house_name" id="house_name" maxlength="40">
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class=" text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-primary">Limpiar</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-primary" id="submit-house">Agregar Casa</button>
					</p>
				</form>
			</div>