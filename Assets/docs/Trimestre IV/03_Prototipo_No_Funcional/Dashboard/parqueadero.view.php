<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueadero</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
    <link rel="stylesheet" href="diseño_rol.css">
</head>
<body>
    <div class="container">
        <h2>Reservar Parqueadero</h2>
        <form>
            <div class="form-group">
                <label for="numeroParqueadero">Número de Parqueadero:</label>
                <select class="form-control" id="numeroParqueadero">
                    <option value="1">Parqueadero 1</option>
                    <option value="2">Parqueadero 2</option>
                    <option value="3">Parqueadero 3</option>
                    <option value="4">Parqueadero 4</option>
                    <option value="5">Parqueadero 5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fechaInicio">Fecha de Inicio:</label>
                <input type="datetime-local" class="form-control" id="fechaInicio">
            </div>
            <div class="form-group">
                <label for="fechaFin">Fecha de Fin:</label>
                <input type="datetime-local" class="form-control" id="fechaFin">
            </div>
            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>
    </div>
</body>
</html>
