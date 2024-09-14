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
             if (!isset($_SESSION['user_code'])) {
                 header("Location: ?c=Login");
                 exit();
             }
             
             $roles = new User;
             $roles = $roles->read_roles();
             $users = new User;
             $users = $users->read_users();
             $places = new Place;
             $places = $places->read_place();
             
             $codUser = $_SESSION['user_code'];
             
             require_once "views/modules/bookings/booking_create.view.php";
         } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
             if (!isset($_SESSION['user_code'])) {
                 echo "<script>
                     Swal.fire({
                         icon: 'error',
                         title: 'Acceso Denegado',
                         text: 'Debes iniciar sesión para crear una reserva.',
                         confirmButtonText: 'Entendido'
                     }).then((result) => {
                         if (result.isConfirmed) {
                             window.location.href = '?c=Login';
                         }
                     });
                 </script>";
                 exit();
             }
     
             $bookingDate = $_POST['booking_date'];
             $codUser = $_POST['cod_user'];
             $codPlace = $_POST['cod_place'];
             $bookingStatus = isset($_POST['booking_status']) ? $_POST['booking_status'] : 'pending';
     
             if ($codUser != $_SESSION['user_code']) {
                 echo "<script>
                     Swal.fire({
                         icon: 'error',
                         title: 'Acción No Permitida',
                         text: 'Solo puedes crear reservas para tu propia cuenta.',
                         confirmButtonText: 'Entendido'
                     });
                 </script>";
                 exit();
             }
     
             $booking = new Booking();
             if ($booking->isBookingExist($bookingDate, $codPlace)) {
                 echo "<script>
                     Swal.fire({
                         icon: 'error',
                         title: 'Reserva Duplicada',
                         text: 'Ya existe una reserva con la misma fecha y lugar.',
                         confirmButtonText: 'Entendido'
                     });
                 </script>";
                 
                 $roles = new User;
                 $roles = $roles->read_roles();
                 $users = new User;
                 $users = $users->read_users();
                 $places = new Place;
                 $places = $places->read_place();
                 $userCode = $codUser;
                 
                 require_once "views/modules/bookings/booking_create.view.php";
             } else {
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
    
} public function bookingView() {
    if (!isset($_SESSION['session']) || ($_SESSION['session'] !== 'HABITANTE' && $_SESSION['session'] !== 'ARRENDATARIO')) {
        header("Location: ?c=Dashboard");
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Método de solicitud no válido.',
                confirmButtonText: 'Entendido'
            });
        </script>";
        return;
    }

    $currentUserCode = $_SESSION['user_code'] ?? null;

    if (!$currentUserCode) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error de Sesión',
                text: 'Código de usuario no encontrado en la sesión. Por favor, vuelva a iniciar sesión.',
                confirmButtonText: 'Ir al Login'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '?c=Login';
                }
            });
        </script>";
        return;
    }

    $booking = new Booking();
    $bookings = $booking->getBookingsForUser($currentUserCode);

    if ($bookings) {
        // Pasar los datos de las reservas a la vista
        require_once "views/modules/bookings/booking_read.users.php";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'info',
                title: 'Sin Reservas',
                text: 'No se encontraron reservas para tu usuario.',
                confirmButtonText: 'Entendido'
            });
        </script>";
    }
}
}
?>
