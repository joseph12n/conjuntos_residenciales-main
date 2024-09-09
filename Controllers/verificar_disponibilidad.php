<?php
header('Content-Type: application/json');

// Obtén los parámetros de la solicitud
$bookingDate = $_POST['booking_date'];
$placeCode = $_POST['cod_place'];

// Incluye el archivo del modelo de Booking si es necesario
require_once 'models/Booking.php';
$booking = new Booking();

// Verifica si ya existe una reserva
$isAvailable = !$booking->isBookingExist($bookingDate, $placeCode);

// Devuelve la respuesta en formato JSON
echo json_encode($isAvailable);
?>
