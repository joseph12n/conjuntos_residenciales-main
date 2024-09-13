<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; MIS RESERVAS
    </h3>
</div>

<div class="container-fluid">
    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <?php if (!empty($bookings)): ?>
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>Fecha de reserva</th>
                                <th>Código usuario</th>
                                <th>Identificación</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Lugar</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bookings as $booking): ?>
                                <tr>
                                    <td><?php echo $booking['booking_date']; ?></td>
                                    <td><?php echo $booking['cod_user']; ?></td>
                                    <td><?php echo $booking['user_id']; ?></td>
                                    <td><?php echo $booking['user_name']; ?></td>
                                    <td><?php echo $booking['user_lastname']; ?></td>
                                    <td><?php echo $booking['place_name']; ?></td>
                                    <td><?php echo $booking['booking_status']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <div class="alert alert-info" role="alert">
                        No tienes reservas registradas en este momento.
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>