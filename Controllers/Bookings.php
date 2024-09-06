
<?php
require_once "models/Booking.php";
require_once "models/User.php";
require_once "models/Place.php";
class Bookings{
    private $session;
    public function __construct(){
        $this->session = $_SESSION['session'];
    }
    // Controlador Principal
    public function main()
    {
        header("Location: ?c=Dashboard");
    }

    // Controlador Crear Usuario
public function bookingCreate(){
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
        $bookingStatus = isset($_POST['booking_status']) ? $_POST['booking_status'] : 'pending';
        $booking = new Booking(
            $_POST['booking_date'],
            null, 
            $_POST['cod_user'],
            $_POST['cod_place'],
            $bookingStatus
        );
        $booking->create_booking();
        header("Location: ?c=Bookings&a=bookingRead");
    }
}


    // Controlador Consultar Usuarios
    public function bookingRead(){
        if ($this->session == 'ADMIN'|| $this->session == 'VIGILANTE') {
        $bookings = new Booking;
        $bookings = $bookings->read_booking();
        require_once "views/modules/bookings/booking_read.view.php";
    } else {
        header("Location: ?c=Dashboard");
}
    }
    // Controlador Actualizar Usuario
    public function bookingUpdate(){
        if ($this->session == 'ADMIN') {
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
            $_POST['booking_date'],
            null, 
            $_POST['cod_user'],
            $_POST['cod_place'],
            $bookingStatus
            );
            // print_r($userUpdate);
            $bookingUpdate->update_booking();
            header("Location: ?c=Bookings&a=bookingRead");
        }
    } else {
        header("Location: ?c=Dashboard");
}
    }
    // Controlador Eliminar Usuario
    public function bookingDelete(){
        if ($this->session == 'ADMIN') {
        $booking = new Booking;
        $booking->delete_booking($_GET['idbooking']);
        header("Location: ?c=bookings&a=bookingRead");
    } else {
        header("Location: ?c=Dashboard");
}
}
public function bookingUpdateStatus() {
    if ($this->session != 'ADMIN') {
        header("Location: ?c=Dashboard");
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $booking_id = isset($_POST['booking_id']) ? intval($_POST['booking_id']) : 0;
        $action = isset($_POST['action']) ? $_POST['action'] : '';
        
        if ($booking_id && ($action == 'approve' || $action == 'reject')) {
            $new_status = ($action == 'approve') ? 'approved' : 'rejected';
            
            $booking = new Booking();
            if ($booking->updateStatus($booking_id, $new_status)) {
                $_SESSION['success'] = "Estado de la reserva actualizado a " . ucfirst($new_status);
            } else {
                $_SESSION['error'] = "Error al actualizar el estado de la reserva.";
            }
        } else {
            $_SESSION['error'] = "Acción no válida o ID de reserva faltante.";
        }
    }
    
    header("Location: ?c=Bookings&a=bookingRead");
    exit();
}
}
?>