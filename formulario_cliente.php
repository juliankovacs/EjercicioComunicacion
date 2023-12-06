<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="estilos2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <title>Bandeja de entrada</title>
</head>
<body>
  <header>
    <a href="." class="logo">
      <img src="descarga.png" alt="Claro">
    </a>
    <nav>
      <a href="" class="nav-line">Inicio</a>
      <a href="" class="nav-line">Noticias</a>
      <a href="login.php" class="nav-line">Ingreso</a>
    </nav>
  </header>
  <section>
    <?php
    if ($_SESSION['CONTROL'] !== 1) {
      header("Location: index.php");
      exit;
    }
    ?>
     <div class="container">
      <div class="flex-container">
        <div>
          <h2>Bienvenido</h2>
          <label>Cliente</label>
          <a href="crear_escrito.php">
            <button style="background-color: red;">Crear Escrito</button>
          </a>
          <a href="historial.php">
            <button style="background-color: red;">Escritos Enviados/Recibidos</button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 Company, Inc</p>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Shop</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
  </footer>
</body>
</html>