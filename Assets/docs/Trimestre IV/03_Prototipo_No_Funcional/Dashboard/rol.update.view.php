<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Rol</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="diseño_rol.css">
</head>
<body>
    <div class="container">
        <h2>Actualizar Rol</h2>
        <form>
            <div class="form-group">
                <label for="nombreRol">Nombre del Rol:</label>
                <input type="text" class="form-control" id="nombreRol">
            </div>
            <div class="form-group">
                <label for="permisos">Permisos:</label>
                <select multiple class="form-control" id="permisos">
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Rol</button>
        </form>
    </div>
</body>
</html>
