<?php
session_start();
include 'connection.php';

$email=$_POST['email'];
$password=$_POST['password'];

$s="SELECT * FROM users WHERE email='$email' && password='$password'";
$result=mysqli_query($conn,$s);

$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['email']=$email;
    $_SESSION['name']=$name;

	header('location:home.php');
}
else{
	//header('location:login.php');
	echo "Invalid Credentials";	
}

?>