<?php
 require_once "models/Vehicle.php";
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

            $type->setVehicleType($_POST['vehicle_type']);
            $type->create_type();
            header("Location: ?c=Vehicles&a=typeRead");
        }
    }

    // Controlador Consultar tipos de vehiculo
    public function typeRead(){
        $types = new Vehicle;
        $types = $types->read_type();
        require_once "views/modules/vehicles/type_read.view.php";
    }

    // Controlador Actualizar tipo de vehiculo
    public function typeUpdate(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $typeId = new Vehicle;
            $typeId = $typeId->gettype_bycode($_GET['idtype']);
            require_once "views/modules/vehicles/type_update.view.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $typeUpdate = new Vehicle;
            $typeUpdate->setTypeCode($_POST['cod_type']);
            $typeUpdate->setVehicleType($_POST['vehicle_type']);
            $typeUpdate->update_type();
            header("Location: ?c=Vehicles&a=typeRead");
        }
    }

    // Controlador Eliminar tipo de vehiculo
    public function typeDelete(){
        $type = new Vehicle;
        $type->delete_type($_GET['idtype']);
        header("Location: ?c=Vehicles&a=typeRead");
    }
    }
?>