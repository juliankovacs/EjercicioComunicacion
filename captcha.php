<?php
session_start();
function randomText($length) {
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    $key    = '';
    for($i=0;$i<$length;$i++) {
      $key .= $pattern[rand(0,35)];
    }
    return $key;
}

$_SESSION['captcha'] = randomText(5);
$captcha = imagecreatefromgif("fondo.gif");
$colText = imagecolorallocate($captcha, 0, 0, 0);
imagestring($captcha, 5, 16, 7, $_SESSION['captcha'], $colText);

header("Content-type: image/gif");
imagegif($captcha);
?>