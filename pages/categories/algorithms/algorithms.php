<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../../css/general-styles.css?v=<?php echo (rand()); ?>">
  <link rel="stylesheet" href="../../../css/index.css?v=<?php echo (rand()); ?>">
  <title>Algoritmos</title>
</head>

<body>
  <!-- HEADER -->
  <header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="../../../index.php">Julio Santaman</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="../../../index.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categorías
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../../../index.php">Desarrollo Web</a>
              <a class="dropdown-item" href="./algorithms.php">Algoritmos</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../about-me.php">Acerca de mí</a>
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
        <h5 class="card-header">Algoritmos</h5>
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="../../../images/algorithm.png" alt="Algoritmo" title="Algoritmo">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">¿Qué es un algoritmo?</h5>
              <p class="card-text">En matemáticas, lógica, ciencias de la computación y disciplinas relacionadas, un algoritmo ​ es un conjunto de instrucciones o reglas definidas y no-ambiguas, ordenadas y finitas...</p>
              <a href="./algorithms-info.php" class="btn btn-primary">Leer más</a>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3">
        <h5 class="card-header">Algoritmos</h5>
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="../../../images/flowchart" alt="Diagrama de flujo" title="Diagrama de flujo">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">¿Qué es un diagrama de flujo?</h5>
              <p class="card-text">El diagrama de flujo o flujograma o diagrama de actividades es la representación gráfica de un algoritmo o proceso...</p>
              <a href="./flowchart.php" class="btn btn-primary">Leer más</a>
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
    <a href="https://www.linkedin.com/in/juliocsantaman/"><i class="fab fa-linkedin social-network-icons" title="Linkedin"></i></a>
    <a href="https://www.facebook.com/juliocsantaman/"><i class="fab fa-facebook social-network-icons" title="Facebook"></i></a>
    <a href="https://twitter.com/juliocsantaman/"><i class="fab fa-twitter social-network-icons" title="Twitter"></i></a>
    <a href="https://www.instagram.com/juliocsantaman/"><i class="fab fa-instagram social-network-icons" title="Instagram"></i></a>
    <a href="https://www.pinterest.com.mx/juliocsantaman/"><i class="fab fa-pinterest social-network-icons" title="Pinterest"></i></a>
    <br>
    <small>Copyright &copy; 2020 - Hecho por Julio Santaman</small>
  </footer>
  <!-- END OF FOOTER -->
  <script src="../../../bootstrap/js/jquery-3.5.1.slim.min.js"></script>
  <script src="../../../bootstrap/js/popper.min.js"></script>
  <script src="../../../bootstrap/js/bootstrap.min.js"></script>
  <script src="../../../js/index.js"></script>

</body>

</html>