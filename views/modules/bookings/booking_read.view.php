<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE RESERVA
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
    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                        <tr class="text-center roboto-medium">
                            <th>Fecha de reserva</th>
                            <th>Codigo reserva</th>
                            <th>Codigo usuario</th>
                            <th>Identificación</th>
                            <th>codigo del lugar</th>
                            <th>nombres</th>
                            <th>apellidos</th>
                            <th>lugar</th>
                            <th>ACTUALIZAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookings as $booking) : ?>
                            <tr>
                                <td><?php echo $booking->getBookingDate(); ?></td>
                                <td><?php echo $booking->getBookingCode(); ?></td>
                                <td><?php echo $booking->getUserCode(); ?></td>
                                <td><?php echo $booking->getPlaceCode(); ?></td>
                                <td><?php echo $booking->getUserId(); ?></td>
                                <td><?php echo $booking->getUserName(); ?></td>
                                <td><?php echo $booking->getUserLastName(); ?></td>
                                <td><?php echo $booking->getPlaceName(); ?></td>
                                <td>
                                    <a href="?c=Bookings&a=bookingUpdate&idbooking=<?php echo $booking->getBookingCode(); ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="?c=Bookings&a=bookingDelete&idbooking=<?php echo $booking->getBookingCode(); ?>" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>