<header>
     <!-- Bootstrap core CSS -->
  <link href="Assets/landing/assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="Assets/landing/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="Assets/landing/assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="Assets/landing/assets/css/style.css" rel="stylesheet">
  <link href="Assets/landing/assets/css/style-responsive.css" rel="stylesheet">

  <script src="Assets/landing/assets/js/jquery.js"></script>
  <link href="assets/css/bootstrap.css" rel="stylesheet">
       <div class="botones">
    <button class="boton" onclick="iniciarSesion()">Iniciar sesión</button>
    <button class="boton" onclick="soporte()">Soporte</button>
    <button class="boton" onclick="conocer()">Conoce más</button>
  </div>
  <script src="script.js"></script>

  <script>
    function iniciarSesion() {
      window.location.href = "?c=Login";
    }

    function soporte() {
      window.location.href = "?c=soporte";
    }

    function conocer() {
      window.location.href = "conocemas.html";
    }
  </script>
    </header>