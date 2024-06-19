<!DOCTYPE html>
<link rel="stylesheet" href="assets/dashboard/css/styles.css">
<nav id="sidebar">
    <ul>
        <li><a href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>></a></li>
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
        <div class="sidebar-section-title">Casas</div>
        <div class="sidebar-section-content">
            <a href="?c=Users&a=houseCreate">Agregar casa</a>
            <a href="?c=Users&a=houseRead">Buscar Casa</a>
            <a href="house.update.view.php">Actualizar Casa</a>
        </div>
    </div>
</div>