<?php

session_start();


$_img=imagecreatefrompng('images/fond_verif_img.png');

$avant_plan=imagecolorallocate($_img,255,255,255);

$nombre=mt_rand(100000,999999);
$_SESSION['aleart_nbr']=$nombre;
imagestring($_img,5,18,8,$nombre,$avant_plan);
header("Content-type:image/png");

imagepng($_img); 
?>



