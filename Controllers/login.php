<?php
require_once "models/User.php";

class Login
{
    public function main()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (empty($_SESSION['session'])) {
                require_once "views/company/login.view.php";
            } else {
                header("Location: ?c=Dashboard");
                exit();
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_email = isset($_POST['user_email']) ? $_POST['user_email'] : '';
            $user_pass = isset($_POST['user_pass']) ? $_POST['user_pass'] : '';

            // Validaciones básicas
            if (empty($user_email) || empty($user_pass)) {
                $message = "Los campos de correo y contraseña son obligatorios.";
                require_once "views/company/login.view.php";
                return;
            }

            // Crear una instancia del modelo User
            $profile = new User($user_email, $user_pass);
            $profile = $profile->login();

            if ($profile) {
                $active = $profile->getUserState();

                if ($active != 0) {
                    $_SESSION['session'] = $profile->getRolName();
                    $_SESSION['profile'] = serialize($profile);

                    // Redirigir al dashboard
                    header("Location: ?c=Dashboard");
                    exit();
                } else {
                    $message = "Su cuenta está desactivada.";
                    require_once "views/company/login.view.php";
                }
            } else {
                $message = "Correo o contraseña incorrectos.";
                require_once "views/company/login.view.php";
            }
        }
    }
}
