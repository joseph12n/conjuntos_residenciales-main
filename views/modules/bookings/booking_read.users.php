<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; DETALLE DE RESERVA
    </h3>
</div>

<div class="container-fluid">
    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr class="text-center roboto-medium">
                            <th>Fecha de reserva</th>
                            <th>Codigo usuario</th>
                            <th>Identificación</th>
                            <th>nombres</th>
                            <th>apellidos</th>
                            <th>lugar</th>
                            <th>estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $bookingDetails->getBookingDate(); ?></td>
                            <td><?php echo $bookingDetails->getUserCode(); ?></td>
                            <td><?php echo $bookingDetails->getUserId(); ?></td>
                            <td><?php echo $bookingDetails->getUserName(); ?></td>
                            <td><?php echo $bookingDetails->getUserLastName(); ?></td>
                            <td><?php echo $bookingDetails->getPlaceName(); ?></td>
                            <td><?php echo $bookingDetails->getBookingStatus(); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
