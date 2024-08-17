<?php
class Place {
    // 1ra Parte: Atributos
    private $dbh;
    private $cod_place;
    private $place_name;

    public function __construct() {
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
    public function __construct2($cod_place, $place_name) {
        $this->cod_place = $cod_place;
        $this->place_name = $place_name;
    }

    # Código lugar
    public function setPlaceCode($cod_place) {
        $this->cod_place = $cod_place;
    }

    public function getPlaceCode() {
        return $this->cod_place;
    }

    # Nombre lugar
    public function setPlaceName($place_name) {
        $this->place_name = $place_name;
    }

    public function getPlaceName() {
        return $this->place_name;
    }

    # RF03_CU20 - Registrar lugar
    public function create_Place() {
        try {
            $sql = 'INSERT INTO PLACES (cod_place, place_name) VALUES (:cod_place, :place_name)';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('cod_place', $this->getPlaceCode());
            $stmt->bindValue('place_name', $this->getPlaceName());
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    # RF04_CU04 - Consultar lugar
    public function read_place() {
        try {
            $placeList = [];
            $sql = 'SELECT * FROM PLACES';
            $stmt = $this->dbh->query($sql);
            foreach ($stmt->fetchAll() as $place) {
                $placeObj = new Place($place['cod_place'], $place['place_name']);
                array_push($placeList, $placeObj);
            }
            return $placeList;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    # RF05_CU05 - Obtener lugar por el código
    public function getplace_bycode($placeCode) {
        try {
            $sql = 'SELECT * FROM PLACES WHERE cod_place = :placeCode';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('placeCode', $placeCode);
            $stmt->execute();
            $placeDb = $stmt->fetch();
            $place = new Place($placeDb['cod_place'], $placeDb['place_name']);
            return $place;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    # RF06_CU06 - Actualizar lugar
    public function update_place() {
        try {
            $sql = 'UPDATE PLACES SET place_name = :place_name WHERE cod_place = :placeCode';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('placeCode', $this->getPlaceCode());
            $stmt->bindValue('place_name', $this->getPlaceName());
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    # RF07_CU07 - Eliminar lugar
    public function delete_place($placeCode) {
        try {
            $sql = 'DELETE FROM PLACES WHERE cod_place = :placeCode';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('placeCode', $placeCode);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
?>
