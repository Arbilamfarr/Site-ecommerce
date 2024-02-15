<?php 
session_start();
include 'layouts/header2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site_commerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<style>
    h2,h3{text-align: center;}
  img{
    float: center;
    clear: center;
    margin-left: 35%;
    width: auto;
    height: 330px;
    
}
#exit{display :right;}

    /* b{font-size: 22;
        margin-left: 14cm;
    text-align:right ;} */
</style>
<body>
<nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <ul class="navbar-nav">
    <h1><?php echo "Bienvenu M.<span style=\"color:blue;\"> ".$_SESSION['name']."</span> chez SMI6_COMMERCE!!</br>";    ?></h1>
  </ul>
</nav>
<br>

<h2><b><?php echo "votre pnnier est vide !";?></b><br></h2>
<div id="line">
<h3><b><?php echo "<a href='initialisation.php'>Cliquer ici</a> pour le remplir";?></b></h3>
<img src="./images/paannier.png" alt="shopping"></div>
</body>
</html>