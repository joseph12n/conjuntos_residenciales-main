<?php
require_once "models/User.php";
class Users{
    public function main(){
        // Objeto Rol
        $rol = new User;
        $rol->setRolCode("01");
        echo "Código Rol: ", $rol->getRolCode(), "<hr>";
        $rol->setRolName("admin");
        echo "Nombre Rol: ", $rol->getRolName(), "<hr>";

        // Objeto Usuario
        $user = new User;
        $user->setUserCode("user_123");
        echo "Código Usuario: ", $user->getUserCode(), "<hr>";
        $user->setUserName("Pepito");
        echo "Nombre Usuario: ", $user->getUserName(), "<hr>";
        $user->setUserLastName("Perez");
        echo "Apellido Usuario: ", $user->getUserLastName(), "<hr>";
        $user->setUserId(123456789);
        echo "Identificación Usuario: ", $user->getUserId(), "<hr>";
        $user->setUserEmail("pepito@perez.com");
        echo "Correo Usuario: ", $user->getUserEmail(), "<hr>";
        $user->setUserPass(12345);
        echo "Contraseña Usuario: ", $user->getUserPass(), "<hr>";
        $user->setUserState(True);
        echo "Estado Usuario: ", $user->getUserState(), "<hr>";
    }
}
?>