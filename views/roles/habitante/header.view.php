<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <link href="assets/dashboard/css/bootstrap.css" rel="stylesheet">
    <link href="assets/dashboard/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/dashboard/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/dashboard/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/dashboard/lineicons/style.css">    
    <link href="assets/dashboard/css/style.css" rel="stylesheet">
    <link href="assets/dashboard/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</head>

  </head>

  <body>

  <section id="container" >
            <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>

            <a class="logo"><b>CONJUNTOS RESIDENCIALES</b></a>
            <div class="nav notify-row" id="top_menu">
               
                <ul class="nav top-menu">
 
          
                    
        
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
            
              <ul class="sidebar-menu" id="nav-accordion">
              <p class="centered"><a href="profile.html"><img src="assets/dashboard/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              <figcaption class="roboto-medium text-center">
						<?php echo $profile->getUserName() . " " . $profile->getUserLastName() ?> <br><small class="roboto-condensed-light">Código Usuario: <?php echo $profile->getUserCode() ?></small> <br> ROL: <i class="fab fa-dashcube fa-fw"></i> &nbsp; <?php echo ucfirst($session) ?></a>
                    </figcaption>
                  <li class="mt">
                  <a class="active" href="?c=Dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Reservas</span>
                      </a>
                      <ul class="sub">
                          <li> <a href="?c=Bookings&a=bookingCreate">Reservar</a></li>
                          <li><a href="?c=Bookings&a=bookingRead">Consultar Reservas</a></li>
                      </ul>
                  </li>
                  <li class="mt">
                  <a  href="?c=soporte">
                          <i ></i>
                          <span>soporte</span>
                      </a>
                  </li>
                  </li>
                  </li>
                  </li>
              </ul>

          </div>
      </aside>
  
      <section id="main-content">
          <section class="wrapper">

                
  </section>
   
 <!-- Page content -->
 <section class="full-box page-content">
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li><a id="logout-link" class="logout" href="?c=Logout">Logout</a></li>
        </ul>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
    // Selecciona el enlace de logout
    const logoutLink = document.getElementById('logout-link');
    
    // Agrega un manejador de eventos para el clic en el enlace de logout
    logoutLink.addEventListener('click', function(event) {
        // Previene el comportamiento por defecto
        event.preventDefault();
        
        // Muestra una alerta de confirmación usando SweetAlert2
        Swal.fire({
            title: '¿Estás seguro de que quieres cerrar sesión?',
            text: "No podrás volver atrás después de cerrar sesión.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, cerrar sesión',
            cancelButtonText: 'Cancelar',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si el usuario confirma, redirige a la URL de logout
                window.location.href = logoutLink.href;
            }
        });
    });
});
</script>



  </body>
</html>
