
<?php
require_once "models/Booking.php";
require_once "models/User.php";
require_once "models/Place.php";
class Bookings
{

    public function __construct() {}

    // Controlador Principal
    public function main()
    {
        header("Location: ?c=Dashboard");
    }

    // Controlador Crear Usuario
    public function bookingCreate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $roles = new User;
            $roles = $roles->read_roles();
            $users = new User;
            $users = $users->read_users();
            $places = new Place;
            $places = $places->read_place();
            require_once "views/modules/bookings/booking_create.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $booking = new Booking(
                $_POST['booking_date'],
                null,
                $_POST['cod_user'],
                $_POST['cod_place']
            );
            $booking->create_booking();
            header("Location: ?c=Bookings&a=bookingRead");
        }
    }

    // Controlador Consultar Usuarios
    public function bookingRead()
    {
        $bookings = new Booking;
        $bookings = $bookings->read_booking();
        require_once "views/modules/bookings/booking_read.view.php";
    }

    // Controlador Actualizar Usuario
    public function bookingUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $roles = new User;
            $roles = $roles->read_roles();
            $users = new User;
            $users = $users->read_users();
            $places = new Place;
            $places = $places->read_place();
            require_once "views/modules/bookings/booking_update.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $bookingUpdate = new Booking(
                $_POST['cod_rol'],
                $_POST['cod_user'],
                $_POST['user_id'],
                $_POST['user_name'],
                $_POST['user_lastname'],
                $_POST['cod_place'],
                $_POST['place_name']
            );
            // print_r($userUpdate);
            $bookingUpdate->update_booking();
            header("Location: ?c=Bookings&a=bookingRead");
        }
    }

    // Controlador Eliminar Usuario
    public function bookingDelete()
    {
        $booking = new Booking;
        $booking->delete_booking($_GET['idbooking']);
        header("Location: ?c=bookings&a=bookingRead");
    }
}
?>