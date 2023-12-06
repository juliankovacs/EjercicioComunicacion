<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Recopila los datos del formulario
  $usuario = $_POST["usuario"];
  $titulo = $_POST["titulo"];
  $contenido = $_POST["contenido"];

  // Almacena los datos en variables de sesión
  $_SESSION["usuario"] = $usuario;
  $_SESSION["titulo"] = $titulo;
  $_SESSION["contenido"] = $contenido;

  // Almacena el escrito en el historial
  if (!isset($_SESSION["historialtecni"])) {
    $_SESSION["historialtecni"] = array();
  }

  $_SESSION["historialtecni"][] = array(
    "usuario" => $usuario,
    "titulo" => $titulo,
    "contenido" => $contenido
  );

  // Redirige a la página de confirmación
  header("Location: confirmaciontecni.php");
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

    <div class="container">
      <h2>Enviar Escrito al Cliente</h2>
      <form action="crear_escritotecni.php" method="POST"> <!-- Define el archivo de procesamiento -->
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        
        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" rows="4" required></textarea>
        
        <button type="submit" style="background-color: red;">Enviar</button>
      </form>
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
