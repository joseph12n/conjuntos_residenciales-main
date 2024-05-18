<?php
    require_once "models/DataBase.php";    
    require_once "controllers/Login.php";
    $controller = new Login;
    $controller ->main();
?>