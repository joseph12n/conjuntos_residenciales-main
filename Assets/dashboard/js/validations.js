hacerClic = document.getElementById("container");
hacerClic.addEventListener('click', function (event) {
    id = event.target.getAttribute("id");
    if (id === "submit-house") {
        validar_house();
    } else if (id === "submit-rol") {
        validar_rol();
    } else if (id === "submit-place") {
        validar_place();
    } else if (id === "submit-user") {
        validar_user();
    } else if (id === "submit-booking") {
        validar_booking();
    }
});

function validar_house() {
    house_name = document.getElementById('house_name').value;
    let patron_texto = /^[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]+$/;
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

    } else if (!patron_texto.test(house_name)) {
        event.preventDefault();
        swal({
            title: "Verifique el campo casa",
            text: "La casa NO pueden contener números o caracteres especiales",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('house_name').focus();
            });
    } else if (house_name.length < 5 || house_name.length > 20) {
        event.preventDefault();
        swal({
            title: "Verifique el campo casa",
            text: "La casa NO debe contener entre 5 y 20 caracteres",
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
function validar_rol() {
    rol_name = document.getElementById('rol_name').value;
    event.preventDefault();
    let patron_texto = /^[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]+$/;
    if (rol_name === "") {
        swal({
            title: "Verifique el campo Nombre del rol",
            text: "El Nombre del rol NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('rol_name').focus();
            });

    } else if (!patron_texto.test(rol_name)) {
        event.preventDefault();
        swal({
            title: "Verifique el campo roles",
            text: "El rol NO pueden contener números o caracteres especiales",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('rol_name').focus();
            });
    } else if (rol_name.length < 5 || rol_name.length > 20) {
        event.preventDefault();
        swal({
            title: "Verifique el campo roles",
            text: "El rol debe contener entre 5 y 20 caracteres",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('rol_name').focus();
            });
    }
    else {
        swal({
            title: "Nuevo rol Creado",
            text: "el rol se ha creado con éxito",
            icon: "success",
            button: "Aceptar",
        }).then((result) => {
            if (result) {
                document.form_rol.submit();
            }
        });
    }
}

function validar_place() {
    place_name = document.getElementById('place_name').value;
    // Expresión Regular de Texto
    let patron_texto = /^[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]+$/;
    //Validacion lugar
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

    } else if (!patron_texto.test(place_name)) {
        event.preventDefault();
        swal({
            title: "Verifique el campo lugar",
            text: "El lugar NO pueden contener números o caracteres especiales",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('place_name').focus();
            });
    } else if (place_name.length < 3 || place_name.length > 20) {
        event.preventDefault();
        swal({
            title: "Verifique el campo roles",
            text: "El rol debe contener entre 3 y 20 caracteres",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('place_name').focus();
            });
    }
    else {
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

function validar_user() {
    event.preventDefault();
    cod_rol = document.getElementById('cod_rol').value;
    if (cod_rol === "") {
        swal({
            title: "Verifique el campo Rol",
            text: "El Rol NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('cod_rol').focus();
            });
    }
    else if (cod_rol === "") {
        swal({
            title: "Verifique el campo Rol",
            text: "El Rol NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('cod_rol').focus();
            });
    }
    else {
        swal({
            title: "El Usuario ha sido Creado",
            text: "El Usuario se ha creado con éxito",
            icon: "success",
            button: "Aceptar",
        }).then((result) => {
            if (result) {
                document.form_user.submit();
            }
        });
    }
}

function validar_booking() {
    let patron_numerico = /^[0-9]+$/;
    event.preventDefault();
    booking_date = document.getElementById('booking_date').value;
    cod_place = document.getElementById('cod_place').value;
    cod_user = document.getElementById('cod_user').value;
    if (booking_date === "") {
        swal({
            title: "Verifique el campo fecha",
            text: "la fecha NO puede estar vacía",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('booking_date').focus();
            });
    }
    else if (cod_place === "") {
        swal({
            title: "Verifique el campo lugar",
            text: "El lugar NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('cod_place').focus();
            });
    }
    else if (cod_user === "") {
        swal({
            title: "Verifique el campo usuario",
            text: "El usuario NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('cod_user').focus();
            });
        }else if (!patron_numerico.test(cod_user)) {
        event.preventDefault();
        swal({
            title: "Verifique el campo codigo de usuario",
            text: "El codigo de usuario NO pueden contener números o caracteres especiales",
            icon: "error",
            button: "Aceptar",
        })
     } else if (cod_user.length < 1 || cod_user.length > 10) {
        event.preventDefault();
        swal({
            title: "Verifique el campo codigo de usuario",
            text: "El rcodigo de usuario debe contener entre 1 y 10 caracteres",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('cod_user').focus();
            });

    } else {
        swal({
            title: "La reserva ha sido Creada",
            text: "la reserva se ha creado con éxito",
            icon: "success",
            button: "Aceptar",
        }).then((result) => {
            if (result) {
                document.form_booking.submit();
            }
        });
    }
}