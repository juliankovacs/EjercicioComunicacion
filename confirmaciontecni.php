<?php
session_start();

// Verifica si los datos están presentes en las sesiones
if (isset($_SESSION["titulo"]) && isset($_SESSION["contenido"]) && isset($_SESSION["usuario"])) {
  $titulo = $_SESSION["titulo"];
  $contenido = $_SESSION["contenido"];
  $usuario = $_SESSION["usuario"]; 
} else {
  // Si no se encuentran los datos en las sesiones, redirige a la página de envío
  header("Location: crear_escritotecni.php");
  exit;
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

  <title>Enviar Escrito</title>
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
    <div class="mensaje-container">
  <h2>Escrito Enviado</h2>
  <p>Usuario: <?php echo $usuario; ?></p>
  <p>Título: <?php echo $titulo; ?></p>
  <p>Contenido: <?php echo $contenido; ?></p>
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

