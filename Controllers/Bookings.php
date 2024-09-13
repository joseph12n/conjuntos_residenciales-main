<?php
require_once "models/Booking.php";
require_once "models/User.php";
require_once "models/Place.php";

class Bookings
{
  private $session;
    public function __construct(){
        $this->session = $_SESSION['session'];
    }
     // Controlador Principal
     public function main(){
         header("Location: ?c=Dashboard");
     }

   public function bookingCreate()
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $roles = new User;
        $roles = $roles->read_roles();
        $users = new User;
        $users = $users->read_users();
        $places = new Place;
        $places = $places->read_place();
        
        // Asegurarse de que 'user_code' esté en la sesión
        $userCode = isset($_SESSION['user_code']) ? $_SESSION['user_code'] : '';
        
        require_once "views/modules/bookings/booking_create.view.php";
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $bookingDate = $_POST['booking_date'];
        $codUser = $_POST['cod_user'];
        $codPlace = $_POST['cod_place'];
        $bookingStatus = isset($_POST['booking_status']) ? $_POST['booking_status'] : 'pending';

        // Verificar si la reserva ya existe
        $booking = new Booking();
        if ($booking->isBookingExist($bookingDate, $codPlace)) {
            // Preparar la alerta
            $alertScript = "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Reserva Duplicada',
                    text: 'Ya existe una reserva con la misma fecha y lugar.',
                    confirmButtonText: 'Entendido'
                });
                </script>
            ";
            
            // Cargar la vista con los datos necesarios
            $roles = new User;
            $roles = $roles->read_roles();
            $users = new User;
            $users = $users->read_users();
            $places = new Place;
            $places = $places->read_place();
            $userCode = $codUser;
            
            // Incluir la vista y luego hacer echo del script de alerta
            require_once "views/modules/bookings/booking_create.view.php";
            echo $alertScript;
        } else {
            // Crear nueva reserva
            $booking = new Booking(
                $bookingDate,
                null,
                $codUser,
                $codPlace,
                $bookingStatus
            );
            $booking->create_booking();
            header("Location: ?c=Bookings&a=bookingRead");
        }
    }
}

    // Controlador Consultar Reservas
    public function bookingRead()
    {
        if ($this->session == 'ADMIN' || $this->session == 'VIGILANTE') {
            $bookings = new Booking;
            $bookings = $bookings->read_booking();
            require_once "views/modules/bookings/booking_read.view.php";
        } else {
            header("Location: ?c=Dashboard");
        }
    }

    // Controlador Actualizar Reserva
    public function bookingUpdate(){
        if ($this->session == 'ADMIN'|| $this->session == 'VIGILANTE') {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $roles = new User;
            $roles = $roles->read_roles();
            $users = new User;
            $users = $users->read_users();
            $places = new Place;
            $places = $places->read_place();
            $booking = new Booking;
            $booking = $booking->getbooking_bycode($_GET['idbooking']);
            require_once "views/modules/bookings/booking_update.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $bookingUpdate = new Booking(
                $_POST['booking_date'],
                $_POST['cod_booking'],
                $_POST['cod_user'],
                $_POST['cod_place'],
                $_POST['booking_status']
            );
            
            try {
                $bookingUpdate->update_booking();
                header("Location: ?c=bookings&a=bookingRead");
            } catch (Exception $e) {
                // Maneja el error, muestra un mensaje o guarda en los logs
                error_log("Error en bookingUpdate: " . $e->getMessage());
                // Redirige o muestra un mensaje de error
            }
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
// vista para los usuarios con las reservas 
public function bookingView() {
    if (!isset($_SESSION['session']) || $_SESSION['session'] !== 'HABITANTE') {
        header("Location: ?c=Dashboard");
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
        echo "Método de solicitud no válido.";
        return;
    }

    if (!isset($_GET['idbooking']) || empty($_GET['idbooking'])) {
        echo "Error: Código de reserva no proporcionado. Por favor, asegúrese de incluir un código de reserva válido en la URL.";
        return;
    }

    $bookingCode = $_GET['idbooking'];
    $currentUserCode = $_SESSION['user_code'] ?? null;

    if (!$currentUserCode) {
        echo "Error: Código de usuario no encontrado en la sesión. Por favor, vuelva a iniciar sesión.";
        return;
    }

    $booking = new Booking();
    $bookingDetails = $booking->getBookingForUser($bookingCode, $currentUserCode);

    if ($bookingDetails) {
        require_once "views/modules/bookings/booking_read.users.php";
    } else {
        echo "Error: No se encontró la reserva o no tienes permiso para verla. Por favor, verifica el código de reserva e intenta de nuevo.";
    }
}
}
?>
