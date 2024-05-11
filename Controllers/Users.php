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
        echo"<hr>";

        //objetos3  constructor 09 parametros 
        $userconst = new User("02 ","customer","user_567","marinita","garcia","987654321","marinita@garcia.com",sha1("12345"), true);
        print_r($userconst);
        echo"<hr>";
      //objetos4  constructor 02 parametros 
      $user_login = new User("rodrigo@lara.com",md5("12345"));
      print_r($user_login);
      echo"<hr>";
    }
}
?>