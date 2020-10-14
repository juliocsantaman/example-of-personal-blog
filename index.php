<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./fontawesome/css/all.min.css">
  <link rel="stylesheet" href="./css/general-styles.css?v=<?php echo (rand()); ?>">
  <link rel="stylesheet" href="./css/index.css?v=<?php echo (rand()); ?>">
  <title>Blog Personal</title>
</head>

<body>
  <!-- HEADER -->
  <header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">Julio Santaman</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categorías
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Desarrollo Web</a>
              <a class="dropdown-item" href="#">Algoritmos</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca de mí</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- END OF NAVBAR -->
  </header>
  <!-- END OF HEADER -->
  <!-- MAIN -->
  <main>
    <div class="container my-cards">
      <div class="card mb-3">
        <h5 class="card-header">Desarrollo Web</h5>
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="./images/web-page.jpg" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3">
        <h5 class="card-header">Desarrollo Web</h5>
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="./images/web-page.jpg" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- END OF MAIN -->
  <!-- FOOTER -->
  <footer>
    <small>Copyright &copy; 2020 - Hecho por Julio Santaman</small>
  </footer>
  <!-- END OF FOOTER -->
  <script src="./bootstrap/js/jquery-3.5.1.slim.min.js"></script>
  <script src="./bootstrap/js/popper.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./js/index.js"></script>

</body>

</html>