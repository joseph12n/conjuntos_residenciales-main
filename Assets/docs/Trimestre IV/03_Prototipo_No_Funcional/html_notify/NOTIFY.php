<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Página Web</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="diseño_notify.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Mi Conjunto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="configuracion.html">Configuración</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ayuda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="main-section">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="NOTIFICACIONES.HTML" class="card text-white bg-primary mb-3">
            <div class="card-body">
              <i class="fas fa-bell fa-3x"></i>
              <h5 class="card-title">Notificaciones</h5>
              <p class="card-text">Contenido de la sección de notificaciones</p>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="MENSAJERIA.html" class="card text-white bg-info mb-3">
            <div class="card-body">
              <i class="fas fa-envelope fa-3x"></i>
              <h5 class="card-title">Mensajería</h5>
              <p class="card-text">Contenido de la sección de mensajería.</p>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="CHATS.html" class="card text-white bg-success mb-3">
            <div class="card-body">
              <i class="fas fa-comments fa-3x"></i>
              <h5 class="card-title">Chat</h5>
              <p class="card-text">Contenido de la sección de chat.</p>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="NOVEDADES.html" class="card text-white bg-warning mb-3">
            <div class="card-body">
              <i class="fas fa-bolt fa-3x"></i>
              <h5 class="card-title">Novedades</h5>
              <p class="card-text">Contenido de la sección de novedades.</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
