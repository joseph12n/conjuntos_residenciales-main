<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
    <link rel="stylesheet" href="diseño_rol.css">
</head>
<body>

    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="salon-comunal-tab" data-toggle="tab" href="#salonComunal" role="tab" aria-controls="salonComunal" aria-selected="true">Salón Comunal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="quiosco-tab" data-toggle="tab" href="#quiosco" role="tab" aria-controls="quiosco" aria-selected="false">Quiosco</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="salonComunal" role="tabpanel" aria-labelledby="salon-comunal-tab">
                <h2>Reservar Salón Comunal</h2>
                <div id='calendarSalonComunal'></div>
                <form id="formularioReservaSalonComunal">
                    <div class="form-group">
                        <label for="fechaInicioSalon">Fecha de Inicio:</label>
                        <input type="date" class="form-control" id="fechaInicioSalon" readonly>
                    </div>
                    <div class="form-group">
                        <label for="fechaFinSalon">Fecha de Fin:</label>
                        <input type="date" class="form-control" id="fechaFinSalon" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Reservar</button>
                </form>
            </div>
            <div class="tab-pane fade" id="quiosco" role="tabpanel" aria-labelledby="quiosco-tab">
                <h2>Reservar Quiosco</h2>
                <div id='calendarQuiosco'></div> <form id="formularioReservaQuiosco">
                    <div class="form-group">
                        <label for="fechaInicioQuiosco">Fecha de Inicio:</label>
                        <input type="date" class="form-control" id="fechaInicioQuiosco" readonly>
                    </div>
                    <div class="form-group">
                        <label for="fechaFinQuiosco">Fecha de Fin:</label>
                        <input type="date" class="form-control" id="fechaFinQuiosco" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Reservar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarSalonComunalEl = document.getElementById('calendarSalonComunal');
            var calendarQuioscoEl = document.getElementById('calendarQuiosco');

            var calendarSalonComunal = new FullCalendar.Calendar(calendarSalonComunalEl, {
                initialView: 'dayGridMonth',
                selectable: true,
                select: function(info) {
                    $('#fechaInicioSalon').val(info.startStr);
                    $('#fechaFinSalon').val(info.endStr);
                }
            });

            var calendarQuiosco = new FullCalendar.Calendar(calendarQuioscoEl, {
                initialView: 'dayGridMonth',
                selectable: true,
                select: function(info) {
                    $('#fechaInicioQuiosco').val(info.startStr);
                    $('#fechaFinQuiosco').val(info.endStr);
                }
            });

            calendarSalonComunal.render();
            calendarQuiosco.render();
        });
    </script>
</body>
</html>
