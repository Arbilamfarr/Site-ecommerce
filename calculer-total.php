<?php 


session_start();

$pannier =$_SESSION['pannier'];
$total=0;
$total+=$pannier['Laptop HP']*10000;
$total+=$pannier['Laptop DELL']*9000;
$total+=$pannier['Laptop LENOVO']*8000;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site commerce</title>
    <?php $style='
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
      
      
     
      table {
        font-size: 20;
        text-align: center;
        margin: 20px auto;
        padding: 5px;
        max-width: 70% !important;
        height: 300px;

      }
   #total {font-size: 22px;
 font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; 
  
  
  }
h1{
  color: black;
  font-size: 35px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  background-color: #BAF4FF;
  text-align: center;
  justify-content:center ;
  width: 60%;
  height: 60px;
  margin: 10px auto;
  border-radius: 5px;
}
table th{
  text-align: center;
}
#para{
    font-size: 20px;
   
    color: #4a4a4a;
    text-align: center;
    line-height: 1.6;
   
   
   text-decoration: none;
    border-radius: 5px;
    background-color: #B6B6B6;
    width: 320px;
    margin:  auto 15px;
    padding: 2rem;
box-shadow: 5px 5px 5px #97D3FC;
color: black;
display: inline-block;
  }
  #para:hover{
    color: #4a4a4a;
    background-color: #B6B6B6;
    box-shadow: 5px 5px 5px #97D3FC;
    text-decoration: none;
    transform:scale(1.1,1.1);
  }
#para:active{

color: #4a4a4a;
background-color: #B6B6B6;

}
#para a{
    text-decoration: none;
    color: #4a4a4a;
    font-size: 20px;
    font-weight: 500;
    text-align: center;
    line-height: 1.6;
   

}
.d{
  text-align: center;
  font-size: 20px;
  font-weight: 500;
  color: #4a4a4a;
  text-decoration: underline;
}

    </style>';
    echo $style
    ?>
<?php $html="
</head>
<body>
  <h1>Facture</h1>
<p class='d'> Nom : ". $_SESSION['name']."</p>
<p class='d'>Date :". date('d/m/y h:m:s' )."</p>

<table class='table table-bordered'>
    <thead>
      <tr class='bg-success'>
        <th>PRODUIT</th>
        <th>QUANTITE</th>
        <th>P.U</th>
        <th>PRIX</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> Laptop HP </td>
        <td>". $_SESSION['pannier']['Laptop HP']."</td>
        <td> 10000 DH</td>
        <td>". $_SESSION['pannier']['Laptop HP']*10000 ." DH</td>

    
      </tr>
      <tr>
      <td> Laptop DELL </td>
        <td>". $_SESSION['pannier']['Laptop DELL']."</td>
        <td> 9000 DH</td>
        <td>".$_SESSION['pannier']['Laptop DELL']*9000 ." DH</td>
      </tr>
      <tr>
      <td> Laptop LENOVO </td>
        <td>". $_SESSION['pannier']['Laptop LENOVO']."</td>
        <td> 8000 DH</td>
        <td>". $_SESSION['pannier']['Laptop LENOVO']*8000 ." DH</td>
      </tr>
      <tr id='total' class='alert-info'>
        <td colspan='2'>TOTAL</td>
        <td  style='color: rgb(70,70,70);' colspan='2'>". $total."</td>
      </tr>
    </tbody>
  </table>";
  echo $html;
  $_SESSION['facture']= $style.$html;
   ?>

  <div class="container">
  <p id="para" align="left"><font><a href="index.php">Reteur a la page d'accueil </a></font></p>
  <p id="para" align="center"><font><b><a href="modifier_total.php">modifier total ?</a></b></font></p>
  <p id="para" align="left"><font><a href="pdf_file.php">Imprimer </a></font></p>
  </div>
</body>
</html>