<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
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
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="?c=Logout">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
            
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/dashboard/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">PEDRO</h5>
              	  	
                  <li class="mt">
                  <a class="active" href="?c=Dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Roles</span>
                      </a>
                      <ul class="sub">
                          <li> <a href="?c=Users&a=rolCreate">Agregar Rol</a></li>
                          <li> <a href="?c=Users&a=rolRead">Buscar Rol</a></li>
                          <li> <a href="rol.update.view.php">Actualizar Rol</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Casas</span>
                      </a>
                      <ul class="sub">
                          <li> <a href="?c=Users&a=houseCreate">Agregar casa</a></li>
                          <li> <a href="?c=Users&a=houseRead">Buscar casa</a></li>
                          <li> <a href="house.update.view.php">Actualizar casa</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Usuarios</span>
                      </a>
                      <ul class="sub">
                          <li> <a href="?c=Users&a=userCreate">Agregar Usuario</a></li>
                          <li>  <a href="?c=Users&a=userRead">Buscar Usuario</a>
                          <li>  <a href="user.update.view.php">Actualizar Usuario</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Reservas</span>
                      </a>
                      <ul class="sub">
                          <li> <a href="?c=Bookings&a=bookingCreate">Reservar</a></li>
                          <li><a href="consultar_fechas_reserva.php">Consultar Fechas de Reserva</a></li>
                      </ul>
                  </li>
                      <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Lugares</span>
                      </a>
                      <ul class="sub">
                          <li> <a href="?c=Places&a=placeCreate">Agregar lugar</a></li>
                            <li> <a href="?c=Places&a=placeRead">Buscar lugar</a></li>
                                <li> <a href="?c=Places&a=placeRead">Actualizar consular lugar</a></li>
                      </ul>
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

   
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Bienvenido a tu pagina principal',
            // (string | mandatory) the text inside the notification
            text: '¡Echa un vistazo a todo lo que tenemos por ofrecerte!',
            // (string | optional) the image to display on the left
            image: 'assets/dashboard/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
