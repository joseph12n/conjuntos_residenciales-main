<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos para la barra lateral, contenido principal y botón */
        body {
            background-color: #f8f8f8;
            font-family: 'Open Sans', sans-serif;
        }

        .sidebar {
            background-color: #fff;
            border-right: 1px solid #eee;
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            overflow-x: hidden;
            padding-top: 20px;
            transition: 0.5s;
        }

        .sidebar a {
            color: #555;
            transition: background-color 0.3s ease;
            padding: 10px 8px 10px 16px;
            text-decoration: none;
            font-size: 18px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #f2f2f2;
        }

        .sidebar-section {
            margin-bottom: 10px;
        }

        .sidebar-section-title {
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 15px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
        }

        .sidebar-section-content {
            display: none;
        }

        .main {
            margin-left: 250px;
            padding: 30px;
            transition: 0.5s;
        }

        .sidebar.hidden {
            left: -250px;
        }

        .main.expanded {
            margin-left: 0;
        }

        #toggleSidebarBtn {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 2;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            transition: 0.5s;
        }

        #toggleSidebarBtn.hidden {
            right: 260px;
        }
        
        /* Estilos para las tarjetas */
        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .card {
            background-color: #fff;
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 250px;
            margin: 20px;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-size: 22px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .card-icon {
            font-size: 40px;
            color: #6c757d; /* Gris Bootstrap */
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>

    <div class="main">
        <h1>Dashboard</h1>
        <button id="toggleSidebarBtn">Ocultar</button>

        <div class="sidebar">
            <div class="sidebar-section">
                <div class="sidebar-section-title">Roles</div>
                <div class="sidebar-section-content">
                    <a href="rol.view.php">Agregar Rol</a>
                    <a href="rol.search.view.php">Buscar Rol</a>
                    <a href="rol.update.view.php">Actualizar Rol</a>
                </div>
            </div>
            <div class="sidebar-section">
                <div class="sidebar-section-title">Usuarios</div>
                <div class="sidebar-section-content">
                    <a href="user.view.php">Agregar Usuario</a>
                    <a href="user.search.view.php">Buscar Usuario</a>
                    <a href="user.update.view.php">Actualizar Usuario</a>
                </div>
            </div>
            <div class="sidebar-section">
                <div class="sidebar-section-title">Reservas</div>
                <div class="sidebar-section-content">
                    <a href="reservar.html">Reservar</a>
                    <a href="consultar_fechas_reserva.html">Consultar Fechas de Reserva</a>
                </div>
            </div>
            <div class="sidebar-section">
                <div class="sidebar-section-title">Parqueadero</div>
                <div class="sidebar-section-content">
                    <a href="reservar_parqueadero.html">Reservar Parqueadero</a>
                    <a href="consultar_fechas_parqueadero.html">Consultar Fechas de Reserva Parqueadero</a>
                </div>
            </div>
        </div>

        <div class="card-container">
            <div class="card">
                <i class="fas fa-users card-icon"></i>
                <h2 class="card-title">Roles</h2>
                <a href="roles.html" class="btn btn-primary">Gestionar Roles</a>
            </div>
            <div class="card">
                <i class="fas fa-user card-icon"></i>
                <h2 class="card-title">Usuarios</h2>
                <a href="usuarios.html" class="btn btn-primary">Gestionar Usuarios</a>
            </div>
            <div class="card">
                <i class="fas fa-calendar-alt card-icon"></i>
                <h2 class="card-title">Reservar</h2>
                <a href="reservas.html" class="btn btn-primary">Realizar Reserva</a>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script>
    <script>
        const toggleSidebarBtn = document.getElementById('toggleSidebarBtn');
        const sidebar = document.querySelector('.sidebar');
        const main = document.querySelector('.main');

        toggleSidebarBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            main.classList.toggle('expanded');
            toggleSidebarBtn.classList.toggle('hidden');
            toggleSidebarBtn.textContent = sidebar.classList.contains('hidden') ? 'Mostrar' : 'Ocultar';
        });

        const sectionTitles = document.querySelectorAll('.sidebar-section-title');

        sectionTitles.forEach(title => {
            title.addEventListener('click', () => {
                const content = title.nextElementSibling;
                content.style.display = content.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>
