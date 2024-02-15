<?php 
session_start();
$_SESSION["pannier"]=array("Laptop HP"=>$_SESSION['pannier']['Laptop HP'],"Laptop DELL"=>$_SESSION['pannier']['Laptop DELL'],"Laptop LENOVO"=>$_SESSION['pannier']['Laptop LENOVO']);
header('location:ajout_article.php');
?>
