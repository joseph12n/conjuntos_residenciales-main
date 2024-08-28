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
    <form action="" method="POST" class="form-neon" autocomplete="off" name="form_booking">
        <fieldset>
            <legend><i class="fas fa-user"></i> &nbsp; Agregar Reserva</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group">
                        <label for="bookingDate">fecha de la reserva:</label>
                        <input type="date" class="form-control" name="booking_date" id="booking_date"  maxlength="40">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="cod_place" class="bmd-label-floating">Lugar</label>
                            <select class="form-control" name="cod_place" id="cod_place">
                                <option value="" selected="" disabled="">Seleccione una opción</option>
                                <?php foreach ($places as $place) : ?>
                                    <option value="<?php echo $place->getPlaceCode() ?>"><?php echo $place->getPlaceName() ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="cod_user" class="bmd-label-floating">Users</label>
                            <select class="form-control" name="cod_user" id="cod_user">
                                <option value="" selected="" disabled="">Seleccione una opción</option>
                                <?php foreach ($users as $user) : ?>
                                    <option value="<?php echo $user->getUserCode() ?>"><?php echo $user->getUserId() ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br><br><br>
        <p class="text-center" style="margin-top: 40px;">
            <button type="reset" class="btn btn-primary">Limpiar</button>
            &nbsp; &nbsp;
            <button type="submit" class="btn btn-primary" id="submit-booking">Agregar Reserva</button>
        </p>
    </form>
</div>