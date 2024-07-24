
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR Tipo de vehiculo
				</h3>

			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="?c=Vehicle&a=typeCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR Tipo de vehiculo</a>
					</li>
					<li>
						<a href="?c=Vehicle&a=typeRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR Tipo de vehiculoS</a>
					</li>
					<li>
						<a href="#"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR Tipo de vehiculo</a>
					</li>
				</ul>
			</div>
			<div class="container-fluid">
				<form action="" method="POST" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Agregar Tipo de vehiculo</legend>
						<div class="container-fluid">
							<div class="row">
							<div class="form-group">
                <label for="nombreType">Nombre del Tipo de vehiculo:</label>
                <input type="text" class="form-control" name="vehicle_type" id="vehicle_type" maxlength="40">
            	</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
					<button type="reset" class="btn btn-primary">Limpiar</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-primary">Agregar Tipo de vehiculo</button>
					</p>
				</form>
			</div>
			