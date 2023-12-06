<?php
session_start();
$accion = $_POST['accion'];

// Definir un array para almacenar los hashes de contraseñas
$hashes = array(
    "tecni" => password_hash("contra_tecni", PASSWORD_DEFAULT), // usuario tecni
    "client" => password_hash("contra_client", PASSWORD_DEFAULT), // usuario client
);

switch ($accion) {
    case 'login':
        $usrnm = strip_tags(addslashes($_POST['username']));
        $password = strip_tags(addslashes($_POST['password']));
        $hashed_password = isset($hashes[$usrnm]) ? $hashes[$usrnm] : false; // Obtener el hash de la contraseña del array

        $captcha = strip_tags(addslashes($_POST['captcha']));

        if ($captcha == $_SESSION['captcha']) {
            if ($hashed_password && password_verify($password, $hashed_password)) {
                if ($usrnm == 'tecni') {
                    echo 'logtecni';
                    $_SESSION['usrnm'] = $usrnm;
                    $_SESSION['CONTROL'] = 2;
                } elseif ($usrnm == 'client') {
                    echo 'logcli';
                    $_SESSION['usrnm'] = $usrnm;
                    $_SESSION['CONTROL'] = 1;
                }
            } else {
                echo 'error';
            }
        } else {
            echo 'error'; // Captcha incorrecto
        }
        break;

}
?>
