<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR RESERVA
    </h3>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a class="active" href="?c=Bookings&a=bookingCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR RESERVA</a>
        </li>
        <li>
            <a href="?c=Bookings&a=bookingRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR RESERVA</a>
        </li>
        <li>
            <a href="?c=Bookings&a=bookingRead"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR RESERVA</a>
        </li>
    </ul>
</div>
			<div class="container-fluid">
				<form action="" method="POST" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-address-card"></i> &nbsp; Actualizar RESERVA</legend>
								<div class="col-12 col-md-6">
                                <input type="hidden" class="form-control" name="booking_date" id="booking_date" value="<?php echo $bookingId->getBookingDate();?>">
									<div class="form-group">
                                        <label for="bookingDate">Fecha de la reserva:</label>
                                        <input type="date" class="form-control" name="booking_date" id="booking_date" maxlength="40" value="<?php echo $booking->getBookingDate();?>">
                                    </div>
								</div>
							</div>
						</div>
					</fieldset>					
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; ENVIAR</button>
					</p>
				</form>
			</div>