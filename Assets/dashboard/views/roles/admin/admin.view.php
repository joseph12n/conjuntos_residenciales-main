<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

</head>
<body>

    <div class="main">
        <h1>Dashboard</h1>
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
</body>
</html>
