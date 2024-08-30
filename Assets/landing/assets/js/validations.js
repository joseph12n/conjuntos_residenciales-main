
function validar_login() {
    var user_email = document.getElementById('user_email').value;
    var user_pass = document.getElementById('user_pass').value;
    let patron_correo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    event.preventDefault();
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
      }).then(() => {
        document.form_login.submit();
      });
    }
  }

