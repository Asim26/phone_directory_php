<?php
session_start();
include 'connection.php';

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

if(!empty($_POST['email']) && !empty($_POST['password'])){

	$s="SELECT * FROM users WHERE email='$email'";
	$result=mysqli_query($conn,$s);

	$num=mysqli_num_rows($result);

	if($num==1){
		echo "Email Already Taken";
	}
	else{
		$reg="INSERT INTO users (name,email,password) VALUES ('$name','$email','password')";
		mysqli_query($conn,$reg);
		echo "Registration Successful";
	}

}
else{
	//header('location:login.php');
	echo "Null Values";

}
//end of if empty

?>