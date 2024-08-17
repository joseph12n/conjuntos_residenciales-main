
<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Lugares				</h3>

			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="?c=Places&a=placeCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar lugar</a>
					</li>
					<li>
						<a href="?c=Places&a=placeRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Consultar lugar</a>
					</li>
					<li>
						<a href="?c=Places&a=placeUpdate"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar lugar</a>
					</li>
				</ul>
			</div>
			<div class="container-fluid">
				<form action="" method="POST" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="fas fa-user"></i> &nbsp; Agregar lugar</legend>
						<div class="container-fluid">
							<div class="row">
							<div class="form-group">
                <label for="Placename">Nombre de lugar</label>
                <input type="text" class="form-control" name="place_name" id="place_name" maxlength="40">
            	</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
					<button type="reset" class="btn btn-primary">Limpiar</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-primary">Agregar lugar</button>
					</p>
				</form>
			</div>