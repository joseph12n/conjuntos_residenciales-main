<?php
 require_once "models/Place.php";
 class Places{

     public function __construct(){}

     // Controlador Principal
     public function main(){
         header("Location: ?c=Dashboard");
     }

     // Controlador Crear categoria
 public function placeCreate(){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require_once "views/modules/places/place_create.view.php";
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $place = new Place;
        $place->setPlaceCode(null);
        $place->setPlaceName($_POST['place_name']);
        $place->create_Place();
        header("Location: ?c=Places&a=placeRead");
    }
}
 // Controlador Consultar categoria
 public function placeRead(){
    $places = new Place;
    $places = $places->read_place();
    require_once "views/modules/places/place_read.view.php";
}
 // Controlador Actualizar categoria
 public function placeUpdate(){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // $places = new Place;
        // $places = $places->read_place();
        $placeId = new Place;
        $placeId = $placeId->getplace_bycode($_GET['idplace']);
        require_once "views/modules/places/place_update.view.php";
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $placeUpdate = new Place;
        $placeUpdate->setPlaceCode($_POST['cod_place']);
        $placeUpdate->setPlaceName($_POST['place_name']);
        $placeUpdate->update_place();
        header("Location: ?c=Places&a=placeRead");
    }
}
        // Controlador Eliminar categoria
        public function placeDelete(){
            $place = new Place;
            $place->delete_place($_GET['idplace']);
            header("Location: ?c=Places&a=placeRead");
        }
    }
?>