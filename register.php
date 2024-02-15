<?php include "layouts/header.php"; ?>
<style>
body{
  background-color: #E0FFFF;
}
  label,h2{
color:black;
  }
  .container {
    margin-top: 5%;
    border-radius: 5%;
    width: 50%;
    background-color: #A1D5DF;
    padding-top:2%;
    padding-bottom:2%;
    color: black;
  }
  .btn-primary {
    background-color: #673AB7;
}
  </style>

<div class="container">

  <center><h2>Registration form</h2></center></br>
  <form class="form-horizontal" method="post" action="add_client.php">
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Login:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Enter login" name="name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="password">Password :</label>
	  
      <div class="col-sm-5">
        <input type="password" class="form-control" id="password" placeholder="Enter mot de passe" name="password" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="pwd">Password :</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="pwd" placeholder="Retappez mot de passe" name="password2" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="emal">Email :</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
	 <div class="form-group">
   <label class="control-label col-sm-2 col-sm-offset-2" for=""></label>
      <div class="col-sm-5">
       <center><img src="verif_code_gen.php" alt="verifier le code"></center>
      </div>
    </div>
    <div class="form-group">
      <label for="captcha" class="control-label col-sm-2 col-sm-offset-2"> Code :</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="text" placeholder="Enter code" name="code" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <input type="submit" class="btn btn-primary"  value="Sign up" name="submit">
       
      </div>
    </div>
  </form>
</div>

</body>
</html>
