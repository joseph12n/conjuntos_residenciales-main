<?php
 require_once "models/User.php";
 class Vehicles{

     public function __construct(){}

     // Controlador Principal
     public function main(){
         header("Location: ?c=Dashboard");
     }

     // Controlador Crear tipos de vehiculo
 public function houseCreate(){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require_once "views/modules/vehicles/type_create.view.php";
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $house = new User;
        $house->setCodHouse(null);
        $house->setNameHouse($_POST['house_name']);
        $house->create_house();
        header("Location: ?c=Users&a=houseRead");
    }
}
 // Controlador Consultar tipos de vehiculos
 public function houseRead(){
    $houses = new User;
    $houses = $houses->read_house();
    require_once "views/modules/users/house_read.view.php";
}
 // Controlador Actualizar tipos de vehiculo
 public function houseUpdate(){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $houseId = new User;
        $houseId = $houseId->gethouse_bycode($_GET['idhouse']);
        require_once "views/modules/users/house_update.view.php";
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $houseUpdate = new User;
        $houseUpdate->setCodHouse($_POST['cod_house']);
        $houseUpdate->setNameHouse($_POST['house_name']);
        $houseUpdate->update_house();
        header("Location: ?c=Users&a=houseRead");
    }
}
        // Controlador Eliminar tipos de vehiculo
        public function houseDelete(){
            $house = new User;
            $house->delete_house($_GET['idhouse']);
            header("Location: ?c=Users&a=houseRead");
        }
    }
?>