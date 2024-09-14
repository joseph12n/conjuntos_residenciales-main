<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Reservas</title>
    <link rel="stylesheet" href="ruta/a/tu/archivo.css">
    <!-- Asegúrate de incluir los estilos de Font Awesome y Bootstrap si los estás usando -->
    <style>
        .status-pending { background-color: #ffc107; color: #000; }
        .status-rejected { background-color: #dc3545; color: #fff; }
        .status-approved { background-color: #28a745; color: #fff; }
        .booking-status {
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
        }
    </style>
</head>
<body>
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
                                        <td>
                                            <?php
                                            $status = $booking['booking_status'];
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
</body>
</html>