<?php
$image="../img/".$_GET['id'].".jpg";
$porcentaje = .05;
list($ancho, $alto) = getimagesize($image);
$nuevo_ancho = $ancho * $porcentaje;
$nuevo_alto  = $alto * $porcentaje;
$imagen_ctc = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
$imagen_cfj = imagecreatefromjpeg($image);
imagecopyresampled($imagen_ctc, $imagen_cfj, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
header("Content-type:image/jpeg");
imagejpeg($imagen_ctc, null, 100);
