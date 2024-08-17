<?php
class Booking
{

    private $dbh;
    private $booking_date;
    private $cod_booking;
    private $cod_user;
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

    # Constructor: Objeto 03parámetros
    public function __construct3($booking_date, $cod_booking, $cod_user)
    {
        $this->booking_date = $booking_date;
        $this->cod_booking = $cod_booking;
        $this->cod_user = $cod_user;
    }

    # Constructor: Objeto 04parámetros
    public function __construct4($booking_date, $cod_booking, $cod_user, $cod_place)
    {
        $this->booking_date = $booking_date;
        $this->cod_booking = $cod_booking;
        $this->cod_user = $cod_user;
        $this->cod_place = $cod_place;
    }

    # Constructor: Objeto 08parámetros
    public function __construct8($booking_date, $cod_booking, $cod_user, $user_id, $user_name, $user_lastname, $cod_place, $place_name)
    {
        $this->booking_date = $booking_date;
        $this->cod_booking = $cod_booking;
        $this->cod_user = $cod_user;
        $this->user_id = $user_id;
        $this->user_id = $user_name;
        $this->user_id = $user_lastname;
        $this->cod_place = $cod_place;
        $this->place_name = $place_name;
    }

    #Fecha reserva
    public function setBookingDate($booking_date)
    {
        $this->booking_date = $booking_date;
    }
    public function getBookingDate()
    {
        return $this->booking_date;
    }

    # Codigo de la reserva
    public function setBookingCode($cod_booking)
    {
        $this->$cod_booking = $cod_booking;
    }

    public function getBookingCode()
    {
        return $this->cod_booking;
    }

    # Código Usuario
    public function setUserCode($cod_user)
    {
        $this->cod_user = $cod_user;
    }

    public function getUserCode()
    {
        return $this->cod_user;
    }

    # Identificación Usuario
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
    public function getUserId()
    {
        return $this->user_id;
    }

    # Nombre Usuario
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }
    public function getUserName()
    {
        return $this->user_name;
    }

    # Apellido Usuario
    public function setUserLastName($user_lastname)
    {
        $this->user_lastname = $user_lastname;
    }
    public function getUserLastName()
    {
        return $this->user_lastname;
    }

    # Código lugar
    public function setPlaceCode($cod_place)
    {
        $this->cod_place = $cod_place;
    }

    public function getPlaceCode()
    {
        return $this->cod_place;
    }

    # Nombre lugar
    public function setPlaceName($place_name)
    {
        $this->place_name = $place_name;
    }

    public function getPlaceName()
    {
        return $this->place_name;
    }

    public function create_booking()
    {
        try {
            $sql = 'INSERT INTO BOOKING VALUES (
                            :bookingDate,
                            :bookingCode,
                            :userCode,
                            :userId,
                            :userName,
                            :userLastName,
                            :placeCode,
                            :placeName
                        )';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('bookingDate', $this->getBookingDate());
            $stmt->bindValue('bookingCode', $this->getBookingCode());
            $stmt->bindValue('userCode', $this->getUserCode());
            $stmt->bindValue('userId', $this->getUserId());
            $stmt->bindValue('userName', $this->getUserName());
            $stmt->bindValue('userLastName', $this->getUserLastName());
            $stmt->bindValue('placeCode', $this->getPlaceCode());
            $stmt->bindValue('placeName', $this->getPlaceName());
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
                    b.booking_date,
                    b.cod_booking,
                    u.cod_user AS user_id,
                    u.user_name,
                    u.user_lastname,
                    p.cod_place
                    p.place_name
                FROM PLACES AS p
                INNER JOIN BOOKING AS b ON p.cod_place = b.cod_place 
                INNER JOIN USERS AS u ON u.cod_user = b.cod_user";

            $stmt = $this->dbh->query($sql);
            if ($stmt === false) {
                throw new Exception("Error en la ejecución de la consulta SQL");
            }
            foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $booking) {
                $bookingObj = new Booking(
                    $booking['booking_date'],
                    $booking['cod_booking'],
                    $booking['user_id'],
                    $booking['user_name'],
                    $booking['user_lastname'],
                    $booking['cod_place'],
                    $booking['place_name']
                );
                $bookingList[] = $bookingObj;
            }
            return $bookingList;
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
            throw new Exception("Error al obtener el registro");
        }
    }

    public function update_booking()
    {
        try {
            $sql = "UPDATE BOOKING SET
                            booking_date = :bookingDate,
                            cod_booking = :bookingCode,
                            cod_user = :userCode,
                            user_id = :userId,
                            user_name = :userName,
                            user_lasname = :userLastName,
                            cod_place = :placeCode,
                            placeName = :placeName,
                        WHERE booking_date = :bookingDate";

            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('bookingDate', $this->getBookingDate());
            $stmt->bindValue('bookingCode', $this->getBookingCode());
            $stmt->bindValue('userCode', $this->getUserCode());
            $stmt->bindValue('userId', $this->getUserId());
            $stmt->bindValue('userName', $this->getUserName());
            $stmt->bindValue('userLastName', $this->getUserLastName());
            $stmt->bindValue('placeCode', $this->getPlaceCode());
        } catch (Exception $e) {
            // die($e->getMessage());
            error_log("Error en update_booking: " . $e->getMessage());
        }
    }

    public function delete_booking($bookingCode)
    {
        try {
            $sql = 'DELETE FROM BOOKING WHERE cod_booking = :bookingCode';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('bookingCode', $bookingCode);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
