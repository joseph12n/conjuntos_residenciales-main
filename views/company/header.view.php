<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>DASHGUM - Bootstrap Admin Template</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet">

  <script src="assets/js/jquery.js"></script>
</head>
<body>
    <header>
       <div class="botones">
    <button class="boton" onclick="iniciarSesion()">Iniciar sesión</button>
    <button class="boton" onclick="soporte()">Soporte</button>
    <button class="boton" onclick="conocer()">Conoce más</button>
  </div>
  <script src="script.js"></script>

  <script>
    function iniciarSesion() {
      window.location.href = "login.html";
    }

    function soporte() {
      window.location.href = "soporte.html";
    }

    function conocer() {
      window.location.href = "conocemas.html";
    }
  </script>
    </header>

    <main>
        <div class="bienvenida">
            <h1>Bienvenido</h1>
            <p>Esta es una breve descripción de lo que puedes encontrar en nuestro sitio web. ¡Explora y descubre!</p>
        </div>
        <section id="main-content">
          <section class="wrapper site-min-height">
          	<hr>
				<div class="row mt">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="imge/conjunto 3.jpg"><img class="img-responsive" src="imge/conjunto 3.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="imge/conjunto 5.jpg"><img class="img-responsive" src="imge/conjunto 5.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
          </section>
    </main>
    <script src="assets/js/fancybox/jquery.fancybox.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
  
  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });

  </script>
  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>
</body>
</html>
