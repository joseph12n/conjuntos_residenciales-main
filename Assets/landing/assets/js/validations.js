// Define la variable 'form' en el ámbito global del script
var form;

document.addEventListener('DOMContentLoaded', function() {
  // Inicializa la variable 'form' cuando el DOM esté listo
  form = document.forms['form_login'];
  var submitButton = document.getElementById('submit-login');

  submitButton.addEventListener('click', function(event) {
    event.preventDefault(); // Previene el comportamiento por defecto del botón de submit
    validar_login(); // Llama a la función de validación
  });
});

function validar_login() {
  var user_email = document.getElementById('user_email').value;
  var user_pass = document.getElementById('user_pass').value;

  if (user_email === "") {
    swal({
      title: "Verifique el campo correo",
      text: "El correo NO puede estar vacío",
      icon: "error",
      button: "Aceptar",
    }).then(() => {
      document.getElementById('user_email').focus();
    });
  } else if (user_pass === "") {
    swal({
      title: "Verifique el campo contraseña",
      text: "La contraseña NO puede estar vacía",
      icon: "error",
      button: "Aceptar",
    }).then(() => {
      document.getElementById('user_pass').focus();
    });
  } else {
    swal({
      title: "Iniciando sesión",
      text: "Por favor espere...",
      icon: "info",
      button: false,
      timer: 1500
    }).then(() => {
      // Envía el formulario
      form.submit(); 
    });
  }
}


//Funcion de casas
hacerClic = document.getElementById("container");
hacerClic.addEventListener('click', function (event) {
    id = event.target.getAttribute("id");
    if (id === "submit-house") {
        validar_house();
    }
});

function validar_house() {
    house_name = document.getElementById('house_name').value;
    event.preventDefault();
    if (house_name === "") {
        swal({
            title: "Verifique el campo Nombre de la Casa",
            text: "El Nombre de la Casa NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('house_name').focus();
            });
    } else {
        swal({
            title: "Nueva Casa Creada",
            text: "La casa se ha creado con éxito",
            icon: "success",
            button: "Aceptar",
        }).then((result) => {
            if (result) {
                document.form_house.submit();
            }
        });
    }
}

//Fncion de lugares
hacerClic = document.getElementById("container");
hacerClic.addEventListener('click', function (event) {
    id = event.target.getAttribute("id");
    if (id === "submit-place") {
        validar_place();
    }
});

function validar_place() {
    place_name = document.getElementById('place_name').value;
    event.preventDefault();
    if (place_name === "") {
        swal({
            title: "Verifique el campo Nombre del Lugar",
            text: "El Nombre del Lugar NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('place_name').focus();
            });
    } else {
        swal({
            title: "Nuevo Lugar Creado",
            text: "El lugar se ha creado con éxito",
            icon: "success",
            button: "Aceptar",
        }).then((result) => {
            if (result) {
                document.form_place.submit();
            }
        });
    }
}
