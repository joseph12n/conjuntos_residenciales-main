<?php
class Vehicle{
    // 1ra Parte: Atributos
    private $dbh;
    private $cod_type;
    private $vehicle_type;

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

            # Constructor: Objeto 02 parámetros
            public function __construct2($cod_type,$vehicle_type){
                $this->cod_type = $cod_type;
                $this->vehicle_type = $vehicle_type;
            }
 # Código tipo de vehiculo
 public function setTypeCode($cod_type){
    $this->cod_type = $cod_type;
}
public function getTypeCode(){
    return $this->cod_type;
}
# Nombre tipo de vehiculo
public function setVehicleType($vehicle_type){
    $this->vehicle_type = $vehicle_type;
}
public function getVehicleType(){
    return $this->vehicle_type;
}

  # RF03_CU20 - Registrar tipo de vehiculo
  public function create_type(){
    try {
        $sql = 'INSERT INTO "TYPE" VALUES (:codType,:vehicleType)';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue('codType', $this->getTypeCode());
        $stmt->bindValue('vehicleType', $this->getVehicleType());
        $stmt->execute();
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

# RF04_CU04 - Consultar tipo de vehiculo
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
# RF05_CU05 - Obtener tipo de vehiculo por el código
public function gethouse_bycode($houseCode){
try {
$sql = "SELECT * FROM HOUSE WHERE cod_house=:houseCode";
$stmt = $this->dbh->prepare($sql);
$stmt->bindValue('houseCode', $houseCode);
$stmt->execute();
$houseDb = $stmt->fetch();
$house = new User;
$house->setCodHouse($houseDb['cod_house']);
$house->setNameHouse($houseDb['house_number']);
return $house;
} catch (Exception $e) {
die($e->getMessage());
}
}
# RF06_CU06 - Actualizar tipo de vehiculo
public function update_house(){
try {
$sql = 'UPDATE HOUSE SET
            cod_house = :houseCode,
            house_number = :houseName
        WHERE cod_house = :houseCode';
$stmt = $this->dbh->prepare($sql);
$stmt->bindValue('houseCode', $this->getCodHouse());
$stmt->bindValue('houseName', $this->getNameHouse());
$stmt->execute();
} catch (Exception $e) {
die($e->getMessage());
}
}

# RF07_CU07 - Eliminar tipo de vehiculo
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