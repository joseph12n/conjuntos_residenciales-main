$(document).ready(function() {
    // Configuración de FullCalendar para el Salón Comunal
    $('#calendarSalonComunal').fullCalendar({
      selectable: true,
      selectHelper: true,
      select: function(start, end) {
        $('#fechaInicioSalon').val(start.format('YYYY-MM-DD'));
        $('#fechaFinSalon').val(end.format('YYYY-MM-DD'));
      }
    });
  
    // Manejo del formulario de reserva del salón comunal
    $('#formularioReservaSalonComunal').submit(function(event) {
      event.preventDefault();
      // Obtener los datos del formulario del salón comunal
      var formDataSalon = {
        fechaInicio: $('#fechaInicioSalon').val(),
        fechaFin: $('#fechaFinSalon').val(),
        // ... otros datos del formulario del salón comunal
      };
      // Enviar los datos al backend (reemplaza con tu lógica de envío)
      enviarReserva(formDataSalon, 'salon'); 
    });
  
    // Configuración de FullCalendar para el Quiosco
    $('#calendarQuiosco').fullCalendar({
      selectable: true,
      selectHelper: true,
      select: function(start, end) {
        $('#fechaInicioQuiosco').val(start.format('YYYY-MM-DD'));
        $('#fechaFinQuiosco').val(end.format('YYYY-MM-DD'));
      }
    });
  
    // Manejo del formulario de reserva del quiosco
    $('#formularioReservaQuiosco').submit(function(event) {
      event.preventDefault();
      // Obtener los datos del formulario del quiosco
      var formDataQuiosco = {
        fechaInicio: $('#fechaInicioQuiosco').val(),
        fechaFin: $('#fechaFinQuiosco').val(),
        // ... otros datos del formulario del quiosco
      };
      // Enviar los datos al backend (reemplaza con tu lógica de envío)
      enviarReserva(formDataQuiosco, 'quiosco');
    });
  
    // Función para enviar la reserva al backend
    function enviarReserva(formData, tipoReserva) {
      // Lógica para enviar los datos al backend (AJAX, Fetch, etc.)
      // ...
  
      // Ejemplo de envío con Fetch:
      fetch('/reservar', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          formData: formData,
          tipoReserva: tipoReserva
        })
      })
      .then(response => response.json())
      .then(data => {
        // Manejar la respuesta del servidor (éxito o error)
        // ...
      });
    }
  });
  