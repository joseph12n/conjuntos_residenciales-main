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
        $sql = 'INSERT INTO TIPO VALUES (
        :codType,
        :vehicleType
)';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue('codType', $this->getTypeCode());
        $stmt->bindValue('vehicleType', $this->getVehicleType());
        $stmt->execute();
    } catch (Exception $e) {
        die($e->getMessage());
    }
}
# RF04_CU04 - Consultar tipo de vehiculo
public function read_type(){
try {
$typeList = [];
$sql = 'SELECT * FROM TIPO';
$stmt = $this->dbh->query($sql);
foreach ($stmt->fetchAll() as $type) {
    $typeObj = new Vehicle;
    $typeObj->setTypeCode($type['cod_type']);
    $typeObj->setVehicleType($type['vehicle_type']);
    array_push($typeList, $typeObj);
}
return $typeList;
} catch (Exception $e) {
die($e->getMessage());
}
}
# RF05_CU05 - Obtener tipo de vehiculo por el código
public function gettype_bycode($typeCode){
try {
$sql = "SELECT * FROM TIPO WHERE cod_type=:typeCode";
$stmt = $this->dbh->prepare($sql);
$stmt->bindValue('typeCode', $typeCode);
$stmt->execute();
$typeDb = $stmt->fetch();
$type = new Vehicle;
$type->setTypeCode($typeDb['cod_type']);
$type->setVehicleType($typeDb['vehicle_type']);
return $type;
} catch (Exception $e) {
die($e->getMessage());
}
}
# RF06_CU06 - Actualizar tipo de vehiculo
public function update_type(){
try {
$sql = 'UPDATE TIPO SET 
            cod_type = :typeCode,
            vehicle_type = :vehicleType
        WHERE cod_type = :typeCode';
$stmt = $this->dbh->prepare($sql);
$stmt->bindValue('typeCode', $this->getTypeCode());
$stmt->bindValue('vehicleType', $this->getVehicleType());
$stmt->execute();
} catch (Exception $e) {
die($e->getMessage());
}
}

# RF07_CU07 - Eliminar tipo de vehiculo
public function delete_type ($typeCode){
try {
$sql = 'DELETE FROM TIPO WHERE cod_type = :typeCode';
$stmt = $this->dbh->prepare($sql);
$stmt->bindValue('typeCode', $typeCode);
$stmt->execute();
} catch (Exception $e) {
die($e->getMessage());
}
}
}
?>