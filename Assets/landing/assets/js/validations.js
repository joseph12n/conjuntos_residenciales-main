hacerClic = document.getElementById("container");
hacerClic.addEventListener('click', function (event) {
    id = event.target.getAttribute("id");
    if (id === "submit-login") {
        validar_login();
    }
});

function validar_login() {
    user_email = document.getElementById('user_email').value;
    user_pass = document.getElementById('user_pass').value;
    let patron_correo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    event.preventDefault();
    if (user_email === "") {
        swal({
          title: "Verifique el campo correo",
          text: "El correo NO puede estar vacío",
          icon: "error",
          button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_email').focus();
            });

    } else if (!patron_correo.test(user_email)) {
        event.preventDefault();
        swal({
            title: "Verifique el campo email",
            text: "el email NO puede contener números o caracteres especiales",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_email').focus();
            });
    } else if (user_email.length < 5 || user_email.length > 50) {
        event.preventDefault();
        swal({
            title: "Verifique el campo email",
            text: "La email NO debe contener entre 5 y 50 caracteres",
            icon: "error",
            button: "Aceptar",
        })
            .then((value) => {
                document.getElementById('user_email').focus();
            });
    } else {
        swal({
          title: "Iniciando sesión",
          text: "Por favor espere...",
          icon: "info",
          button: false,
          timer: 1500
        }).then((result) => {
            if (result) {
                document.form_login.submit();
            }
        });
    }
}

