<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="diseño_rol.css">
</head>
<body>

    <div class="container">
        <h2>Buscar Usuario</h2>
        <form>
            <div class="form-group">
                <label for="terminoBusqueda">Buscar por nombre, apellido, código o correo:</label>
                <input type="text" class="form-control" id="terminoBusqueda">
            </div>
            <button type="submit" class="btn btn-primary">Buscar Usuario</button>
        </form>
        <div id="resultadosBusqueda">
            </div>
    </div>

</body>
</html>
