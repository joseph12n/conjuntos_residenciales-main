<?php
require_once "Models/User.php";
class Users{
    public function main(){    
        $rol = new User;
        $rol->setRolCode("ABC123");
        echo $rol->getRolName("");
    }
}
?>