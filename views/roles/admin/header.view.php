<!DOCTYPE html>
<link rel="stylesheet" href="assets/dashboard/css/styles.css">
<nav id="sidebar">
    <ul>
<button id="toggleSidebarBtn">Ocultar</button>

<div class="sidebar">
    <div class="sidebar-section">
        <div class="sidebar-section-title">
        <a href="?c=Dashboard">Admin</a>
    </div>
    </div>
        <div class="sidebar-section">
        <div class="sidebar-section-title">Roles</div>
        <div class="sidebar-section-content">
            <a href="?c=Users&a=rolCreate">Agregar Rol</a>
            <a href="?c=Users&a=rolRead">Buscar Rol</a>
            <a href="rol.update.view.php">Actualizar Rol</a>
        </div>
    </div>
    <div class="sidebar-section">
        <div class="sidebar-section-title">Usuarios</div>
        <div class="sidebar-section-content">
            <a href="?c=Users&a=userCreate">Agregar Usuario</a>
            <a href="?c=Users&a=userRead">Buscar Usuario</a>
            <a href="user.update.view.php">Actualizar Usuario</a>
        </div>
    </div>
    <div class="sidebar-section">
        <div class="sidebar-section-title">Reservas</div>
        <div class="sidebar-section-content">
            <a href="reserva.view.php">Reservar</a>
            <a href="consultar_fechas_reserva.php">Consultar Fechas de Reserva</a>
        </div>
    </div>
    <div class="sidebar-section">
        <div class="sidebar-section-title">Tipos de vehiculo</div>
        <div class="sidebar-section-content">
            <a href="?c=Vehicle&a=typeCreate">Agregar tipo de vehiculo</a>
            <a href="?c=Vehicle&a=typeRead">Buscar tipo de vehiculo</a>
            <a href="house.update.view.php">Actualizar tipo de vehiculo</a>
        </div>
    </div>
</div>
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