<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/dashboard/css/style.css">
    <link href="assets/dashboard/css/bootstrap.css" rel="stylesheet">
    <link href="assets/dashboard/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/dashboard/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/dashboard/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/dashboard/lineicons/style.css">    
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
</head>
<body>

    <div class="main">
        <h1>Dashboard</h1>
        <div class="card-container">
            <div class="card">
                <i class="fas fa-users card-icon"></i>
                <h2 class="card-title">Roles</h2>
                <a href="?c=Users&a=rolRead"class="btn btn-primary">Gestionar Roles</a>
            </div>
            <div class="card">
                <i class="fas fa-user card-icon"></i>
                <h2 class="card-title">Usuarios</h2>
                <a href="?c=Users&a=userRead" class="btn btn-primary">Gestionar Usuarios</a>
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
