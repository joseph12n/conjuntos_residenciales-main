<!-- Page header -->
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-pencil-alt fa-fw"></i> &nbsp; ACTUALIZAR RESERVA
    </h3>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="?c=Bookings&a=bookingCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR RESERVA</a>
        </li>
        <li>
            <a href="?c=Bookings&a=bookingRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR RESERVAS</a>
        </li>
    </ul>
</div>

<div class="container-fluid">
    <form action="?c=Bookings&a=bookingUpdate" method="POST" class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="far fa-address-card"></i> &nbsp; Actualizar Información de Reserva</legend>
            <div class="row">
                <!-- Código de reserva -->
                <input type="hidden" name="booking_code" value="<?php echo $booking->getBookingCode(); ?>">

                <!-- Fecha de reserva -->
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="bookingDate">Fecha de la reserva:</label>
                        <input type="date" class="form-control" name="booking_date" id="booking_date" value="<?php echo $booking->getBookingDate(); ?>">
                    </div>
                </div>

                <!-- Código de lugar -->
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="cod_place">Lugar:</label>
                        <select class="form-control" name="cod_place" id="cod_place_update">
                            <?php foreach ($places as $place) : ?>
                                <option value="<?php echo $place->getPlaceCode(); ?>" <?php echo $place->getPlaceCode() == $booking->getPlaceCode() ? 'selected' : ''; ?>>
                                    <?php echo $place->getPlaceName(); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- Código de usuario -->
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="user_code">Código de usuario:</label>
                        <input type="text" class="form-control" name="user_code" id="user_code_update" value="<?php echo $booking->getUserCode(); ?>" readonly>
                    </div>
                </div>

                <!-- Estado de reserva -->
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="booking_status">Estado:</label>
						<select name="booking_status" id="booking_status">
    <option value="approved" <?php echo $booking->getBookingStatus() == 'approved' ? 'selected' : ''; ?>>Aprobado</option>
    <option value="pending" <?php echo $booking->getBookingStatus() == 'pending' ? 'selected' : ''; ?>>Pendiente</option>
    <option value="rejected" <?php echo $booking->getBookingStatus() == 'rejected' ? 'selected' : ''; ?>>Rechazado</option>
</select>
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
