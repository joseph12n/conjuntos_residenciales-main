<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="diseño_notify.css">

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
                    <a href="reserva.view.php">Reservar</a>
                    <a href="consultar_fechas_reserva.html">Consultar Fechas de Reserva</a>
                </div>
            </div>
            <div class="sidebar-section">
                <div class="sidebar-section-title">Parqueadero</div>
                <div class="sidebar-section-content">
                    <a href="parqueadero.view.php">Reservar Parqueadero</a>
                    <a href="consultar_fechas_parqueadero.html">Consultar Fechas de Reserva Parqueadero</a>
                </div>
            </div>
        </div>

        <div class="card-container">
            <div class="card">
                <i class="fas fa-users card-icon"></i>
                <h2 class="card-title">Roles</h2>
                <a href="rol.view.php"class="btn btn-primary">Gestionar Roles</a>
            </div>
            <div class="card">
                <i class="fas fa-user card-icon"></i>
                <h2 class="card-title">Usuarios</h2>
                <a href="user.view.php" class="btn btn-primary">Gestionar Usuarios</a>
            </div>
            <div class="card">
                <i class="fas fa-calendar-alt card-icon"></i>
                <h2 class="card-title">Reservar</h2>
                <a href="reserva.view.php" class="btn btn-primary">Realizar Reserva</a>
            </div>
            <div class="card">
                <i class="fas fa-calendar-alt card-icon"></i>
                <h2 class="card-title">Reservar</h2>
                <a href="parqueadero.view.php" class="btn btn-primary">Reserva parqueadero</a>
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
