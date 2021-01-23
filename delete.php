<?php
  include'connection.php';
  if(isset($_GET['id'])){
  	$sql="DELETE FROM dir WHERE id=".$_GET['id'];
  	if(mysqli_query($conn,$sql)){
  		header('Location:home.php');
  	}
  	else {
  		echo "Error".mysqli_error($conn);
  	}
  }
?>