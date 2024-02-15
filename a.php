<?php 
session_start();
include 'layouts/header2.php';
if(isset($_GET['ajout'])){
switch ($_GET['ajout']) {
    case 'Laptop HP':
      $_SESSION['pannier']['Laptop HP']++;

        break;
    case 'Laptop DELL':
       $_SESSION['pannier']['Laptop DELL']++;        
     break;
     case 'Laptop LENOVO':
        $_SESSION['pannier']['Laptop LENOVO']++;
                break;
   
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    <style>
  .card {
  width: 270px;
  height: 165px;
  padding: 0.5rem;
  background: #A49C9C;
  border-radius: 8px;
  backdrop-filter: blur(5px);
  border-bottom: 3px solid rgba(255, 255, 255, 0.440);
  border-left: 2px  rgba(255, 255, 255, 0.545) outset;
  box-shadow: -40px 50px 30px rgba(0, 0, 0, 0.280);
  transform: skewX(10deg);
  transition: .4s;
  overflow: hidden;
  color: white;
  margin: 100px 70px;
}

.card:hover {
  height: 370px;
  transform: skew(0deg);
}
.card:active {
  height: 335px;
  transform: skew(0deg);
}

.align {
  padding: 1rem;
  display: flex;
  flex-direction: row;
  gap: 5px;
  align-self: flex-start;
}

.red {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #ff605c;
  box-shadow: -5px 5px 5px rgba(0, 0, 0, 0.280);
}

.yellow {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #ffbd44;
  box-shadow: -5px 5px 5px rgba(0, 0, 0, 0.280);
}

.green {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #00ca4e;
  box-shadow: -5px 5px 5px rgba(0, 0, 0, 0.280);
}

.card h1  {
  text-align: center;
  margin: 1.3rem;
  color: rgb(218, 244, 237);
  text-shadow: -10px 5px 10px rgba(0, 0, 0, 0.573);
}
.card h4{
    font-size: 25px;
    text-align: center;
  margin: 1.3rem;
  color: #FF0303;
  text-shadow: -10px 5px 10px #BAF4FF;
}
.card{display: inline-block;}
img{
    width: 255px;
    height: 120px;
    border-radius: 5px;
    box-shadow: -5px 5px 5px rgba(0, 0, 0, 0.280);


}
.btn {
 position: relative;
 font-size: 17px;
 text-transform: uppercase;
 text-decoration: none;
 padding: 1em 2.5em;
 display: inline-block;
 border-radius: 6em;
 transition: all .2s;
 width: 120px;
 border: none;
 font-family: inherit;
 font-weight: 500;
 color: black;
 background-color: white;
}

.btn:hover {
 transform: translateY(-3px);
 box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
 transform: translateY(-1px);
 box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn::after {
 content: "";
 display: inline-block;
 height: 100%;
 width: 100%;
 border-radius: 100px;
 position: absolute;
 top: 0;
 left: 0;
 z-index: -1;
 transition: all .4s;
}

.btn::after {
 background-color: #fff;
}

.btn:hover::after {
 transform: scaleX(1.4) scaleY(1.6);
 opacity: 0;

}
.btn:hover .card{
     height: 335px;
  transform: skew(0deg);}
  #para{
    font-size: 20px;
    font-weight: 500;
    color: #4a4a4a;
    text-align: center;
    line-height: 1.6;
    margin: 0 0 2rem 0;
    font-family: 'Poppins', sans-serif;
   text-decoration: none;
    border-radius: 5px;
    background-color: #B6B6B6;
    width: 400px;
    margin: 13px auto;
    padding: 2rem;
box-shadow: 5px 5px 5px #97D3FC;
color: black;
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

</style>
</head>
<body>
    <span class="container">
<div class="card">
    <div class="align">
        <span class="red"></span>
        <span class="yellow"></span>
        <span class="green"></span>
    </div>
    <img src="images/hp.png" alt="">
    <h1>HP</h1>
   <h4>Prix : 10000 DH</h4>
   <h4 style="color: #ffbd44;"><?php echo $_SESSION['pannier']['Laptop HP']?></h4>
   <a href="a.php?ajout=Laptop HP" class="btn"> +
</a> 
 <a href="a.php?ajout=Laptop HP" class="btn">-
</a>

</div>




<div class="card">
    <div class="align">
        <span class="red"></span>
        <span class="yellow"></span>
        <span class="green"></span>
    </div>
    <img src="images/dell.png" alt="">
    <h1>DELL</h1>
   <h4>Prix : 9000 DH</h4>
   <h4 style="color: #ffbd44;"><?php echo $_SESSION['pannier']['Laptop DELL']?></h4>
   <a href="a.php?ajout=Laptop DELL" class="btn"> +
</a> 
 <a href="a.php?ajout=Laptop DELL" class="btn">-
</a>
</div>
<div class="card">
    <div class="align">
        <span class="red"></span>
        <span class="yellow"></span>
        <span class="green"></span>
    </div>
    <img style="background-color:antiquewhite;" src="images/lenovo.png" alt="">
    <h1>HP</h1>
   <h4>Prix : 8000 DH</h4>
   <h4 style="color: #ffbd44;"><?php echo $_SESSION['pannier']['Laptop LENOVO']?></h4>
   <a href="a.php?ajout=Laptop LENOVO" class="btn"> +
</a> 
 <a href="a.php?ajout=Laptop LENOVO" class="btn">-
</a>
</div></span>
<p id="para" align="center" style="font-size:20 ;"><a href="initialisation.php">vider mon pannier ?</a></p>
<p id="para" align="center" style="font-size:20 ;"><a href="calculer-total.php">calculer  totale :</a></p>
<p id="para" align="left" style="font-size:20 ;" ><a href="index.php" onclick=" alert('voullez vous quite la page')">Reteur a la page d'accueill</a></p> 

</body>
</html>
ajout_article