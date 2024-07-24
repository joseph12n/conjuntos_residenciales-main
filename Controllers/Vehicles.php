<?php
 require_once "models/User.php";
 class Vehicles{

     public function __construct(){}

     // Controlador Principal
     public function main(){
         header("Location: ?c=Dashboard");
     }

     // Controlador Crear tipos de vehiculo
 public function typeCreate(){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require_once "views/modules/vehicles/type_create.view.php";
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $type = new Vehicle;
        $type->setTypeCode(null);
        $type->setVehicleType($_POST['vehicle_type']);
        $type->create_type();
        header("Location: ?c=Users&a=typeRead");
    }
}
 // Controlador Consultar tipos de vehiculos
 public function typeRead(){
    $types = new Vehicle;
    $types = $types->read_type();
    require_once "views/modules/users/type_read.view.php";
}
 // Controlador Actualizar tipos de vehiculo
 public function typeUpdate(){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $typeId = new Vehicle;
        $typeId = $typeId->gettype_bycode($_GET['idtype']);
        require_once "views/modules/users/type_update.view.php";
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $typeUpdate = new Vehicle;
        $typeUpdate->setTypeCode($_POST['cod_type']);
        $typeUpdate->setVehicleType($_POST['vehicle_type']);
        $typeUpdate->update_type();
        header("Location: ?c=Vehicle&a=typeRead");
    }
}
        // Controlador Eliminar tipos de vehiculo
        public function typeDelete(){
            $type = new Vehicle;
            $type->delete_type($_GET['idtype']);
            header("Location: ?c=Vehicle&a=typeRead");
        }
    }
?>