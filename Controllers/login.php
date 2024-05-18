<?php
    require_once "models/User.php";
    class Login{
        // Controlador Principal
        public function main(){
           $user = new User(
                "vicente@fernandez.com",
                "6789"
           );
           $user = $user-> login();
           if($user){
            print_r($user);
           }else{
            echo "el usuario no existe";
           }
        }
}

?>