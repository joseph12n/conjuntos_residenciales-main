<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conjunto Residencial Recodo de Cedro Suba</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="Assets/landing/assets/js/validations.js" defer></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #2c3e50;
        }

        .navbar-brand,
        .nav-link {
            color: #ecf0f1 !important;
        }

        .jumbotron {
            background-color: #34495e;
            color: #ecf0f1;
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .info-section {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
            transition: transform 0.3s ease;
        }

        .info-section:hover {
            transform: translateY(-5px);
        }

        .footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 1rem 0;
        }

        .fade-in {
            animation: fadeIn 1s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        #login-page {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        #container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-login {
            display: flex;
            flex-direction: column;
        }

        .form-login-heading {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .login-wrap {
            display: flex;
            flex-direction: column;
        }

        .login-wrap label {
            margin-bottom: 0.5rem;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        .btn-theme {
            background-color: #007bff;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-theme:hover {
            background-color: #0056b3;
        }

        .fa-lock {
            margin-right: 0.5rem;
        }

        ul {
            padding-left: 20px;
        }

        .info-adicional,
        .contactos {
            margin-top: 2rem;
            padding: 1rem;
            background-color: #f1f8ff;
            border-radius: 4px;
        }

        .contactos p {
            margin: 0.5rem 0;
        }
    </style>
    <script>
        function iniciarSesion() {
            window.location.href = "?c=Login";
        }

        function soporte() {
            window.location.href = "?c=soporte";
        }

        function conocer() {
            window.location.href = "conocemas.html";
        }

        function inicio() {
            window.location.href = "?";
        }
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="?">Recodo de Cedro Suba</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" onclick="inicio()">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="iniciarSesion()">Iniciar sesion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="soporte()">Soporte</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
    </section>
</body>

</html>