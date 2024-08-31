// inicio de las  alertas principales 
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
    // Expresión Regular de Texto
    let patron_texto = /^[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]+$/;
    //Validacion casa
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
    // Expresión Regular de Texto
    let patron_texto = /^[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]+$/;
    //Validacion Rol
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
    cod_house = document.getElementById('cod_house').value;
    user_state = document.getElementById('user_state').value;
    user_name = document.getElementById('user_name').value;
    user_lastname = document.getElementById('user_lastname').value;
    user_birthday = document.getElementById('user_birthday').value;
    user_id = document.getElementById('user_id').value;
    user_email = document.getElementById('user_email').value;
    user_pass = document.getElementById('user_pass').value;
    user_pass_conf = document.getElementById('user_pass_conf').value;
    user_phone = document.getElementById('user_phone').value;
    // Expresión Regular de correo electrónico
    let patron_correo = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    // Expresión Regular de Texto
    let patron_texto = /^[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]+$/;
    //Expresión regular númerico
    let patron_numerico = /^[0-9]+$/;

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
    else if (cod_house === "") {
        swal({
            title: "Verifique el campo Nombre de la Casa",
            text: "El Nombre de la Casa NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('cod_house').focus();
            });
    }
    else if (cod_house === "") {
        swal({
            title: "Verifique el campo Nombre de la Casa",
            text: "El Nombre de la Casa NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('cod_house').focus();
            });
    }
    else if (user_state === "") {
        swal({
            title: "Verifique el campo estado",
            text: "El estado NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_state').focus();
            });
    }
    else if (user_state === "") {
        swal({
            title: "Verifique el campo del estado",
            text: "El estado NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_state').focus();
            });
    }
    else if (user_name === "") {
        swal({
            title: "Verifique el campo Nombre",
            text: "El Nombre NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_name').focus();
            });
    }
    else if (user_name.length < 2 || user_name.length > 50) {
        swal({
            title: "Verifique el campo Nombres",
            text: "Los Nombres deben contener entre 2 y 50 caracteres",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_name').focus();
            });
    }
    else if (!patron_texto.test(user_name)) {
        swal({
            title: "Verifique el campo Nombres",
            text: "Los Nombres NO pueden contener números o caracteres especiales",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_name').focus();
            });
    }
    else if (user_lastname === "") {
        swal({
            title: "Verifique el campo Apellidos",
            text: "Los apellidos NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_lastname').focus();
            });
    }
    else if (user_lastname.length < 2 || user_lastname.length > 50) {
        swal({
            title: "Verifique el campo Apellidos",
            text: "Los Nombres deben contener entre 2 y 50 caracteres",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_lastname').focus();
            });
    }
    else if (!patron_texto.test(user_lastname)) {
        swal({
            title: "Verifique el campo Apellidos",
            text: "Los Apellidos NO pueden contener números o caracteres especiales",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_lastname').focus();
            });
    }
    else if (user_birthday === "") {
        swal({
            title: "Verifique el campo Fecha",
            text: "La fecha NO puede estar vacía",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_birthday').focus();
            });
    }
    else if (user_id === "") {
        swal({
            title: "Verifique el campo Identificación",
            text: "La Identificación NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_id').focus();
            });
    }
    else if (user_id.length < 5 || user_id.length > 20) {
        swal({
            title: "Verifique el campo Identificación",
            text: "La identificación debe contener entre 5 y 20 caracteres",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_id').focus();
            });
    }
    else if (!patron_numerico.test(user_id)) {
        swal({
            title: "Verifique el campo identificación",
            text: "La identificación NO pueden contener letras o caracteres especiales",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_id').focus();
            });
    }
    else if (user_email === "") {
        swal({
            title: "Verifique el campo correo",
            text: "El correo NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_email').focus();
            });
    }
    else if (user_email.length < 5 || user_email.length > 20) {
        swal({
            title: "Verifique el campo correo",
            text: "Recuerda que el correo debe ser el tal cual se registro",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_email').focus();
            });
    }
    else if (!patron_correo.test(user_email)) {
        swal({
            title: "Verifique el campo correo",
            text: "Recuerda que el correo debe ir con @ y .com",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_email').focus();
            });
    }
    else if (user_pass === "") {
        swal({
            title: "Verifique el campo contraseña",
            text: "El contraseña NO puede estar vacía",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_pass').focus();
            });
    }
    else if (user_pass !== user_pass_conf) {
        swal({
            title: "Verifique el campo contraseña",
            text: "Las contraseñas no son iguales",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_pass_conf').focus();
            });
    }
    else if (user_phone === "") {
        swal({
            title: "Verifique el campo telefono",
            text: "La telefono NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_phone').focus();
            });
    }
    else if (user_phone.length < 5 || user_phone.length > 20) {
        swal({
            title: "Verifique el campo telefono",
            text: "Los telefono debe contener entre 5 y 10 caracteres",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_phone').focus();
            });
    }
    else if (!patron_numerico.test(user_phone)) {
        swal({
            title: "Verifique el campo telefono",
            text: "El telefono NO pueden contener letras o caracteres especiales, fijos 601",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_phone').focus();
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
    event.preventDefault();
    booking_date = document.getElementById('booking_date').value;
    cod_place = document.getElementById('cod_place').value;
    cod_user = document.getElementById('cod_user').value;
    //Patron validacio  texto
    let patron_numerico = /^[0-9]+$/;

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
    } else if (!patron_numerico.test(cod_user)) {
        event.preventDefault();
        swal({
            title: "Verifique el campo codigo de usuario",
            text: "El codigo NO pueden contener letras o caracteres especiales",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('cod_user').focus();
            });
    } else if (cod_user.length < 1 || cod_user.length > 3) {
        event.preventDefault();
        swal({
            title: "Verifique el campo codigo de usuario",
            text: "El codigo debe contener entre 1 y 3 caracteres",
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
// fin de las  alertas principales

//inicio de las alertas de actualizar y eliminar




//fin de las alertas de actualizar y eliminar 




//inicio de las alertas para actualizar los campos

// inicio de las  alertas principales 
hacerClic = document.getElementById("container");
hacerClic.addEventListener('click', function (event) {
    id = event.target.getAttribute("id");
    if (id === "submit-update-rol") {
        validar_update_rol();
    }
});

function validar_update_rol() {
    rol_update_name = document.getElementById('rol_update_name').value;
    event.preventDefault();
    // Expresión Regular de Texto
    let patron_texto = /^[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]+$/;
    //Validacion Rol
    if (rol_update_name === "") {
        swal({
            title: "Verifique el campo Nombre del rol",
            text: "El Nombre del rol NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('rol_update_name').focus();
            });

    } else if (!patron_texto.test(rol_update_name)) {
        event.preventDefault();
        swal({
            title: "Verifique el campo roles",
            text: "El rol NO pueden contener números o caracteres especiales",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('rol_update_name').focus();
            });
    } else if (rol_update_name.length < 5 || rol_update_name.length > 20) {
        event.preventDefault();
        swal({
            title: "Verifique el campo roles",
            text: "El rol debe contener entre 5 y 20 caracteres",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('rol_update_name').focus();
            });
    }
    else {
        swal({
            title: "rol actualizado",
            text: "el rol se ha actualizado con éxito",
            icon: "success",
            button: "Aceptar",
        }).then((result) => {
            if (result) {
                document.form_update_rol.submit();
            }
        });
    }
}

//fin de las alertas para actualizar los campos