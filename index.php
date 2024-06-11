<?php
    require_once "models/DataBase.php";
    $prueba = Database::connection();
    require_once "assets/docs/Trimestre IV/03_Prototipo_No_Funcional/login.php ";;
    $controller = new Users;
    $controller->main();
?>