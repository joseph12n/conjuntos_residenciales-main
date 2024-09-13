<?php
    require_once "models/User.php";
    class Login{
        // Controlador Principal
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
                        header("Location:?c=Dashboard");
                    } else {
                        echo "<script>alert('Usuario inactivo');</script>";
                        require_once "views/company/login.view.php";
                    }
                } else {
                    echo "<script>alert('El usuario no existe');</script>";
                    require_once "views/company/login.view.php";
                }
            }
        }
    }
?>