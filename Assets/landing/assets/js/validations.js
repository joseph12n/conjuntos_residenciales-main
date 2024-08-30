document.getElementById("container").addEventListener('click', function (event) {
    const id = event.target.getAttribute("id");
    if (id === "submit-login") {
        event.preventDefault(); // Prevenir el envío del formulario
        validar_login(event); // Pasar el objeto `event` a `validar_login`
    }
});

function validar_login(event) {
    const user_email = document.getElementById('user_email').value;
    const user_pass = document.getElementById('user_pass').value;
    const patron_correo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (user_email === "") {
        swal({
            title: "Verifique el campo correo",
            text: "El correo NO puede estar vacío",
            icon: "error",
            button: "Aceptar",
        }).then(() => {
            document.getElementById('user_email').focus();
        });

    } else if (!patron_correo.test(user_email)) {
        swal({
            title: "Verifique el campo email",
            text: "ingrese un correo valido",
            icon: "error",
            button: "Aceptar",
        }).then(() => {
            document.getElementById('user_email').focus();
        });

    } else if (user_email.length < 5 || user_email.length > 50) {
        swal({
            title: "Verifique el campo email",
            text: "El email debe tener entre 5 y 50 caracteres",
            icon: "error",
            button: "Aceptar",
        }).then(() => {
            document.getElementById('user_email').focus();
        });

    } else {
        swal({
            title: "Iniciando sesión",
            text: "Por favor espere...",
            icon: "info",
            button: false,
            timer: 1500
        }).then(() => {
            // Suponiendo que el formulario tiene el id 'form_login'
            document.getElementById('form_login').submit();
        });
    }
}
