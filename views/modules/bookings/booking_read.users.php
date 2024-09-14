<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Reservas - Conjunto Residencial</title>
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
        <div class="payment-info">
                            <h1>Información Importante:</h1>
                            <p>En caso de que su reserva este en el estado <strong>pendiente</strong> o <strong>rechazada</strong>, para mas informacion podra acercarse a la administracion o escribir a <strong>suportconjuntos@soporte.com</strong>.</p>
                            <p>El pago debe realizarse en la administración en un horario de 8:00 AM a 4:00 PM.</p>
                        </div>

        <!-- Secciones adicionales: Beneficios, Horarios, Restricciones, etc. -->
        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="info-section">
                    <h2><i class="fas fa-star"></i> Beneficios</h2>
                    <ul>
                        <li>Espacio cerrado ideal para eventos comunitarios y reuniones familiares</li>
                        <li>Capacidad para hasta 100 personas</li>
                        <li>Salón con mobiliario disponible (mesas y sillas)</li>
                        <li>Entorno seguro dentro del conjunto</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="info-section">
                    <h2><i class="fas fa-clock"></i> Horarios</h2>
                    <p>Disponible para reserva:</p>
                    <ul>
                        <li>Lunes a Viernes: 9:00 AM - 9:00 PM</li>
                        <li>Sábados y Domingos: 8:00 AM - 10:00 PM</li>
                        <li>Festivos: 10:00 AM - 8:00 PM</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="info-section">
                    <h2><i class="fas fa-info-circle"></i> A tener en cuenta</h2>
                    <ul>
                        <li>En caso de reserva aprobada, cuenta con dos días hábiles para hacer efectivo el pago en administración.</li>
                        <li>El horario de pagos es de lunes a viernes de 8:00 AM a 4:00 PM.</li>
                        <li>Recuerde que debe reservar el salón con al menos 3 días de anticipación.</li>
                        <li>El salón debe ser dejado en las mismas condiciones en que se recibió.</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="info-section">
                    <h2><i class="fas fa-exclamation-triangle"></i> Restricciones</h2>
                    <ul>
                        <li>No se permite el uso de equipos de sonido con volumen alto después de las 8:00 PM.</li>
                        <li>Está prohibido el consumo de alcohol en exceso dentro del salón.</li>
                        <li>No se permiten fuegos artificiales ni cualquier material inflamable.</li>
                        <li>Las mascotas están permitidas solo si son supervisadas en todo momento.</li>
                        <li>El maltrato o daño a las instalaciones será penalizado según el reglamento del conjunto.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
