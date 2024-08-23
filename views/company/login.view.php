<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/landing/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Incluye SweetAlert -->
    <script src="Assets/landing/assets/js/validations.js" defer></script> <!-- Incluye tu script -->
</head>
<body>

<div id="login-page">
    <div class="container" id="container"> <!-- Asegúrate de que este ID coincida -->
        <form class="form-login" action="" method="post" role="form" name="form_login">
            <h2 class="form-login-heading">Iniciar sesión</h2>
            <div class="login-wrap">
                <label for="user_email">Usuario</label>
                <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Correo electrónico">
                <label for="user_pass">Contraseña</label>
                <input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="Entre 5 y 8 caracteres">
                <button class="btn btn-theme btn-block" type="submit" id="submit-login">
                    <i class="fa fa-lock"></i> ENTRAR
                </button>
                <hr>
            </div>
        </form>
    </div>
</div>

</body>
</html>
