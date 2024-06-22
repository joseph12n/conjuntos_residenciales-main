<?php
    class House{
        // 1ra Parte: Atributos
        private $dbh;
        private $cod_house;
        private $house_name;
        // 2da Parte: Sobrecarga Constructores
        public function __construct(){
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
        public function __construct0(){}

        # Constructor: Objeto 2 parámetros
        public function __construct2($cod_house,$house_name){
            $this->cod_house = $cod_house;
            $this->house_name = $house_name;
        }
        # codigo casa
        public function setCodHouse($cod_house){
            $this->cod_house = $cod_house;
        }
        public function getCodHouse(){
            return $this->cod_house;
        }
        # nombre casa
        public function setNameHouse($house_name){
            $this->house_name = $house_name;
        }
        public function getNameHouse(){
            return $this->house_name;
        }
        // 4ta Parte: Persistencia a la Base de Datos
        # RF03_CU20 - Registrar casa
        public function create_house(){
            try {
                $sql = 'INSERT INTO HOUSE VALUES (:codHouse,:houseName)';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('codHouse', $this->getCodHouse());
                $stmt->bindValue('houseName', $this->getNameHouse());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

  # RF04_CU04 - Consultar Casa
  public function read_house(){
    try {
        $houseList = [];
        $sql = 'SELECT * FROM HOUSE';
        $stmt = $this->dbh->query($sql);
        foreach ($stmt->fetchAll() as $house) {
            $houseObj = new User;
            $houseObj->setCodHouse($house['cod_house']);
            $houseObj->setNameHouse($house['house_number']);
            array_push($houseList, $houseObj);
        }
        return $houseList;
    } catch (Exception $e) {
        die($e->getMessage());
    }
}
  # RF05_CU05 - Obtener La casa por el código
  public function gethouse_bycode($houseCode){
    try {
        $sql = "SELECT * FROM HOUSE WHERE cod_house=:houseCode";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue('houseCode', $houseCode);
        $stmt->execute();
        $houseDb = $stmt->fetch();
        $house = new User;
        $house->setCodHouse($houseDb['cod_house']);
        $house->setNameHouse($houseDb['house_name']);
        return $house;
    } catch (Exception $e) {
        die($e->getMessage());
    }
}
# RF06_CU06 - Actualizar casa
public function update_house(){
    try {
        $sql = 'UPDATE HOUSE SET
                    cod_house = :houseCode,
                    house_name = :houseName
                WHERE cod_house = :houseCode';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue('houseCode', $this->gethouseCode());
        $stmt->bindValue('houseName', $this->gethouseName());
        $stmt->execute();
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

# RF07_CU07 - Eliminar casa
        public function delete_house($houseCode){
            try {
                $sql = 'DELETE FROM HOUSE WHERE cod_house = :houseCode';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('houseCode', $houseCode);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

    }

?>