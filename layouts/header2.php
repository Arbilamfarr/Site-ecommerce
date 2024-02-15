<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Site-Commerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
    body{
        background-image:url('../images/w.png');
     
        background-repeat: repeat-y;
        width:100%;
    }
    .navbar-inverse {
        background-color: #00e6ff;
        border-color: #00e6ff; 
    }
    .navbar-inverse .navbar-brand {
        color:black ;
        
    }
    a:hover{
        color: red;
    }
    .navbar-inverse .navbar-nav>li>a {
        color: black;
        font-size:16px;
    }
   nav{
    width: 100%;
    height: 1.5cm;
background-color: #00e6ff;

   }
    li {
      font-size: 28;
      font-weight: bold;
      font-style: oblique;
      padding:14px;
      list-style:none;
      display: inline-block;
    }
    #name{ margin-left: 450px;}
    #exit{
      
     text-align: left;

     margin-left: 300px;
     
    }
    </style>
</head>
<body>

<nav>
  <div>
   
      
    
      <ul>
        <li><ahref="">Site-Commerce</a></li>
       <li > <p id="name" align="center"><font><?php echo $_SESSION['name'];?></font></p></li>
        <li ><a href="login.php"><span id="exit" style="color: black;" class="glyphicon glyphicon-log-out">Exit</span> </a></li>
       

      </ul>
    </div>
  </div>
</nav>
  