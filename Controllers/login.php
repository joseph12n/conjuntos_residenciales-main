<?php
require_once "models/User.php";
class Login{
    public function main(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (empty($_SESSION['session'])) {
                $message = "";
                require_once "views/company/login.view.php";
            } else {
                header("Location:?c=Dashboard");
            }
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $profile = new User(
                $_POST['user_email'],
                $_POST['user_pass']
            );
            $profile = $profile->login();
            if ($profile) {
                $active = $profile->getUserState();
                if ($active != 0) {
                    $_SESSION['session'] = $profile->getRolName();
                    $_SESSION['profile'] = serialize($profile);
                    $_SESSION['user_code'] = $profile->getUserCode(); // Añadimos el cod_user a la sesión
                    header("Location:?c=Dashboard");
                } else {
                    echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Usuario Inactivo',
                            text: 'Tu cuenta está inactiva. Por favor, contacta al administrador.',
                            confirmButtonText: 'Entendido'
                        });
                    </script>";
                    require_once "views/company/login.view.php";
                }
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Usuario No Existe',
                        text: 'El usuario o la contraseña son incorrectos.',
                        confirmButtonText: 'Intentar de nuevo'
                    });
                </script>";
                require_once "views/company/login.view.php";
            }
        }
    }
}
?>