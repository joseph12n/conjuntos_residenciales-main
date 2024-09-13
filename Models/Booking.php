<?php
class Booking
{
    private $dbh;
    private $booking_date;
    private $cod_booking;
    private $cod_user;
    private $booking_status;
    private $user_id;
    private $user_name;
    private $user_lastname;
    private $cod_place;
    private $place_name;

    // 2da Parte: Sobrecarga Constructores
    public function __construct()
    {
        try {
            $this->dbh = DataBase::connection();
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    # Constructor: Objeto 00 parámetros
    public function __construct0() {}

    # Constructor: Objeto 02 parámetros
    public function __construct2($booking_date, $cod_booking)
    {
        $this->booking_date = $booking_date;
        $this->cod_booking = $cod_booking;
    }

    # Constructor: Objeto 03 parámetros
    public function __construct3($booking_date, $cod_booking, $cod_user)
    {
        $this->booking_date = $booking_date;
        $this->cod_booking = $cod_booking;
        $this->cod_user = $cod_user;
    }

    # Constructor: Objeto 05 parámetros
    public function __construct5($booking_date, $cod_booking, $cod_user, $cod_place, $booking_status)
    {
        $this->booking_date = $booking_date;
        $this->cod_booking = $cod_booking;
        $this->cod_user = $cod_user;
        $this->cod_place = $cod_place;
        $this->booking_status = $booking_status;
    }

    # Constructor: Objeto 07 parámetros
    public function __construct8($cod_booking, $booking_date, $cod_user, $user_id, $user_name, $user_lastname, $place_name, $booking_status)
    {
        $this->cod_booking = $cod_booking;
        $this->booking_date = $booking_date;
        $this->cod_user = $cod_user;
        $this->user_id = $user_id;
        $this->user_name = $user_name;
        $this->user_lastname = $user_lastname;
        $this->place_name = $place_name;
        $this->booking_status = $booking_status;
    }

    # Setters y Getters
    public function setBookingDate($booking_date)
    {
        $this->booking_date = $booking_date;
    }
    public function getBookingDate()
    {
        return $this->booking_date;
    }

    public function setBookingCode($cod_booking)
    {
        $this->cod_booking = $cod_booking; // CORRECCIÓN
    }

    public function getBookingCode()
    {
        return $this->cod_booking;
    }

    public function setBookingStatus($booking_status)
    {
        $this->booking_status = $booking_status; // CORRECCIÓN
    }

    public function getBookingStatus()
    {
        return $this->booking_status;
    }

    public function setUserCode($cod_user)
    {
        $this->cod_user = $cod_user;
    }

    public function getUserCode()
    {
        return $this->cod_user;
    }

    public function setPlaceCode($cod_place)
    {
        $this->cod_place = $cod_place;
    }

    public function getPlaceCode()
    {
        return $this->cod_place;
    }

    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    public function getUserName()
    {
        return $this->user_name;
    }

    public function setUserLastName($user_lastname)
    {
        $this->user_lastname = $user_lastname;
    }

    public function getUserLastName()
    {
        return $this->user_lastname;
    }

    public function setPlaceName($place_name)
    {
        $this->place_name = $place_name;
    }

    public function getPlaceName()
    {
        return $this->place_name;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function isBookingExist($bookingDate, $placeCode)
    {
        try {
            $sql = 'SELECT COUNT(*) FROM BOOKING 
                    WHERE booking_date = :bookingDate 
                    AND cod_place = :placeCode';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue(':bookingDate', $bookingDate);
            $stmt->bindValue(':placeCode', $placeCode);
            $stmt->execute();
            
            $count = $stmt->fetchColumn();
            return $count > 0; // Devuelve true si ya existe una reserva, false en caso contrario
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function create_booking()
    {
        $bookingDate = $this->getBookingDate();
        $bookingCode = $this->getBookingCode();
        $userCode = $this->getUserCode();
        $placeCode = $this->getPlaceCode();
        $bookingStatus = $this->getBookingStatus();
    
        try {
            $sql = 'INSERT INTO BOOKING (booking_date, cod_booking, cod_user, cod_place, booking_status) 
                    VALUES (:bookingDate, :bookingCode, :userCode, :placeCode, :bookingStatus)';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue(':bookingDate', $bookingDate);
            $stmt->bindValue(':bookingCode', $bookingCode);
            $stmt->bindValue(':userCode', $userCode);
            $stmt->bindValue(':placeCode', $placeCode);
            $stmt->bindValue(':bookingStatus', $bookingStatus);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function read_booking()
    {
        try {
            $bookingList = [];
            $sql = "SELECT 
                    b.cod_booking,
                    b.booking_date,
                    u.cod_user,
                    u.user_id,
                    u.user_name,
                    u.user_lastname,
                    p.place_name,
                    b.booking_status
                FROM PLACES AS p
                INNER JOIN BOOKING AS b ON p.cod_place = b.cod_place 
                INNER JOIN USERS AS u ON u.cod_user = b.cod_user";
    
            $stmt = $this->dbh->query($sql);
            if ($stmt === false) {
                throw new Exception("Error en la ejecución de la consulta SQL");
            }
            foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $booking) {
                $bookingObj = new Booking(
                    $booking['cod_booking'],
                    $booking['booking_date'],
                    $booking['cod_user'],
                    $booking['user_id'],
                    $booking['user_name'],
                    $booking['user_lastname'],
                    $booking['place_name'],
                    $booking['booking_status']
                );
                $bookingList[] = $bookingObj;
            }
            return $bookingList;
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }
    public function getbooking_bycode($bookingCode) {
        try {
            $sql = 'SELECT
                b.booking_date,
                b.cod_booking,
                u.cod_user,
                p.cod_place,
                b.booking_status
            FROM PLACES AS p
            INNER JOIN BOOKING AS b ON p.cod_place = b.cod_place 
            INNER JOIN USERS AS u ON u.cod_user = b.cod_user
            WHERE u.cod_booking = :bookingCode';
    
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('bookingCode', $bookingCode);
            $stmt->execute();
            $bookingDb = $stmt->fetch();
    
            if ($bookingDb) {
                $booking = new booking(
                    $bookingDb['booking_date'],
                    $bookingDb['cod_booking'],
                    $bookingDb['cod_user'],
                    $bookingDb['cod_place'],
                    $bookingDb['booking_status']
                );
                return $booking;
            } else {
                return null; // O manejar el caso cuando no se encuentra el usuario
            }
        } catch (Exception $e) {
            error_log("Error en getbooking_bycode: " . $e->getMessage());
            throw new Exception("Error al obtener la reserva");
        }
    }
    
     # RF11_CU11 - Actualizar usuario
     public function update_booking(){
        try {
            $sql = "UPDATE BOOKING SET
                        booking_date = :bookingDate,
                        cod_user = :codUser,
                        cod_place = :codPlace,
                        booking_status = :bookingStatus
                    WHERE cod_booking = :bookingCode";
           
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('bookingDate', $this->getBookingDate());     
            $stmt->bindValue('codUser', $this->getUserCode());
            $stmt->bindValue('codPlace', $this->getPlaceCode());
            $stmt->bindValue('bookingStatus', $this->getBookingStatus());
            $stmt->execute();
        } catch (Exception $e) {
            // die($e->getMessage());
            error_log("Error en update_booking: " . $e->getMessage());
        } 
    }

    # RF12_CU12 - Eliminar Usuario
    public function delete_booking($bookingCode){
        try {
            $sql = 'DELETE FROM BOOKING WHERE cod_booking = :bookingCode';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('bookingCode', $bookingCode);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getBookingsForUser($userCode) {
        try {
            $sql = "SELECT b.*, p.place_name 
                    FROM BOOKING b 
                    INNER JOIN PLACES p ON b.cod_place = p.cod_place 
                    WHERE b.cod_user = :userCode 
                    ORDER BY b.booking_date DESC";
            
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindParam(':userCode', $userCode, PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }    
}


