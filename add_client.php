<?php 
session_start();
include 'connection.php';
if($_POST['submit'])
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	$code=$_POST['code'];
	if($password==$password2 && $code==$_SESSION['aleart_nbr'] ){
	$sql="INSERT INTO `register`(`name`, `email`, `password`) VALUES ('".$name."','".$email."','".$password."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		$_SESSION['ok']='ok';
		$_SESSION['name'] = $name;
		header('Location: home.php');
	}
	else
	{$_SESSION['ok']=["notok"];
		echo "la connexion est echo !";
	}
	
	}else{
		header('Location:register.php');
	}
}
?>