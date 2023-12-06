<?php
session_start();

// Verifica si existen datos en las sesiones
if (isset($_SESSION["historialtecni"])) {
  $historial = $_SESSION["historialtecni"];
} else {
  $historial = array(); // Inicializa un array vacío si no hay historial
}
if (isset($_SESSION["historial"])) {
  $historial_cliente = $_SESSION["historial"];
} else {
  $historial_cliente = array(); // Inicializa un array vacío si no hay historial
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="estilos2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <title>Historial de Escritos Enviados</title>
</head>
<body>
  <header>
    <a href="." class="logo">
      <img src="descarga.png" alt="Claro">
    </a>
    <nav>
      <a href="" class="nav-line">Inicio</a>
      <a href="" class="nav-line">Noticias</a>
      <a href="formulario_tecnico.php" class="nav-line">Volver</a>
    </nav>
  </header>
  <section>
    <?php
    if ($_SESSION['CONTROL'] !== 2) {
      header("Location: index.php");
      exit;
    }
    ?>
  </section>

  <div class="container">
    <h2>Historial de Escritos Enviados</h2>
    <?php
    if (empty($historial)) {
      echo "<p>No se han enviado escritos previamente.</p>";
    } else {
      echo "<ul>";
      foreach ($historial as $escrito) {
        echo "<li>Título: " . $escrito['titulo'] . "</li>";
        echo "<li>Usuario: " . $escrito['usuario'] . "</li>"; 
        echo "<li>Contenido: " . $escrito['contenido'] . "</li>";
        echo "<hr>";
      }
      echo "</ul>";
    }

    ?>
    <div class="container">
    <h2>Historial de Escritos Enviados por Clientes</h2>
      <?php
      if (empty($historial_cliente)) {
        echo "<p>No se han enviado escritos por clientes previamente.</p>";
      } else {
        echo "<ul>";
        foreach ($historial_cliente as $escrito) {
          echo "<li>Título: " . $escrito['titulo'] . "</li>";
          echo "<li>Usuario: " . $escrito['usuario'] . "</li>"; 
          echo "<li>Contenido: " . $escrito['contenido'] . "</li>";
          echo "<hr>";
        }
        echo "</ul>";
      }
      ?>
</div>
  </div>

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
