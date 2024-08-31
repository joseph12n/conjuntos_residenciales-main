
function validar_login() {
    var user_email = document.getElementById('user_email').value;
    var user_pass = document.getElementById('user_pass').value;

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
        document.form_login.submit();
      });
    }
  }
