<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="estilos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>

        <title>Iniciar Sesion</title>
    </head>
    <body>
        <header>
        <a href= "." class = "logo">
          <img src="descarga.png" alt="Claro">
          
        </a>
        <nav>
          <a href="" class="nav-line"> Inicio </a>
          <a href="" class="nav-line"> Noticias </a>
          <a href="login.php" class="nav-line"> Ingreso </a>
        </nav>
      </header>
        
        <form method="post" action="login.php">
            <h2>Iniciar Sesión</h2>
            <label>Ingrese usuario</label>
            <input type="text" id="usuario"><br>
            <label>Ingrese contraseña</label>
            <input type="password"  id="password"><br>
            <img src="captcha.php">
            <input type="text" id="captcha" name="captcha" placeholder="Ingrese el captcha" required>
            <br>
            <button type="button" id="start">Acceder</button>
        </form>
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

<script>
    $(document).ready(function(){
        $('#start').click(function(){
            let usrnm = $('#usuario').val();
            let pass = $('#password').val();
            let captcha = $('#captcha').val();

            $.post('modelo_bd.php',{accion:'login',username:usrnm,password:pass,captcha:captcha},function(data){
                console.log(data);
                if(data == 'logcli'){
                    location.href= 'formulario_cliente.php';
                }else{
                    if(data == 'logtecni'){
                        location.href= 'formulario_tecnico.php';
                    }else{
                            alert('usuario, contraseña o captcha invalido');
                    }
                }
            })
            
        })

    })
</script>
