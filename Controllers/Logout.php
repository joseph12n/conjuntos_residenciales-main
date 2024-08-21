<?php
// Requiere el archivo que contiene la clase User si es necesario
require_once "models/User.php";

class Logout {
    public function __construct() {
        session_start(); // Inicia la sesión
    }

    public function main() {
        $this->endSession();
        $this->redirectToLogin();
    }

    private function endSession() {
        session_unset(); // Libera todas las variables de sesión
        session_destroy(); // Destruye la sesión
    }

    private function redirectToLogin() {
        header("Location: ?c=Login"); // Redirige a la página de login
        exit(); // Asegura que el script se detenga después de la redirección
    }
}

// Crear una instancia de Logout y llamar al método main
$logout = new Logout();
$logout->main();
?>
