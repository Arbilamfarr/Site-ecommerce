<?php 
session_start();
$_SESSION["pannier"]=array("Laptop HP"=>0,"Laptop DELL"=>0,"Laptop LENOVO"=>0);
header('location:ajout_article.php');
?>
