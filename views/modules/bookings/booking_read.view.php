
    <div class="full-box page-header">
        <h3 class="text-left">
            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE RESERVAS
        </h3>
    </div>

    <div class="container-fluid">
        <ul class="full-box list-unstyled page-nav-tabs">
            <li>
                <a href="?c=Bookings&a=bookingCreate"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR RESERVA</a>
            </li>
            <li>
                <a class="active" href="?c=Bookings&a=bookingRead"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CONSULTAR RESERVAS</a>
            </li>
        </ul>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>Código de la reserva</th>
                                <th>Fecha de reserva</th>
                                <th>Código usuario</th>
                                <th>Identificación</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Lugar</th>
                                <th>Estado</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bookings as $booking) : ?>
                                <tr>
                                    <td><?php echo $booking->getBookingCode(); ?></td>
                                    <td><?php echo $booking->getBookingDate(); ?></td>
                                    <td><?php echo $booking->getUserCode(); ?></td>
                                    <td><?php echo $booking->getUserId(); ?></td>
                                    <td><?php echo $booking->getUserName(); ?></td>
                                    <td><?php echo $booking->getUserLastName(); ?></td>
                                    <td><?php echo $booking->getPlaceName(); ?></td>
                                    <td>
                                        <?php
                                        $status = $booking->getBookingStatus();
                                        $statusClass = 'status-' . $status;
                                        $statusText = '';
                                        
                                        switch ($status) {
                                            case 'pending':
                                                $statusText = 'Pendiente';
                                                break;
                                            case 'rejected':
                                                $statusText = 'Rechazado';
                                                break;
                                            case 'approved':
                                                $statusText = 'Aprobado';
                                                break;
                                            default:
                                                $statusText = $status;
                                                $statusClass = '';
                                        }
                                        ?>
                                        <span class="booking-status <?php echo $statusClass; ?>"><?php echo $statusText; ?></span>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-xs" onclick="confirmUpdate('<?php echo $booking->getBookingCode(); ?>')">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-xs" onclick="confirmDelete('<?php echo $booking->getBookingCode(); ?>')">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script>
    // Función para la alerta de actualización
    function confirmUpdate(bookingCode) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Vas a actualizar esta reserva!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, actualizar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?c=Bookings&a=bookingUpdate&idbooking=" + bookingCode;
            }
        });
    }

    // Función para la alerta de eliminación
    function confirmDelete(bookingCode) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "?c=Bookings&a=bookingDelete&idbooking=" + bookingCode;
            }
        });
    }
</script>
