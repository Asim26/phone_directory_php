<?php
   
   include 'connection.php';
  
  if(isset($_POST['btn_submit'])){

  	if(!empty($_POST['name']) && !empty($_POST['cell_no']) && !empty($_POST['email'])){


      $sql="INSERT INTO dir (name,cell_no,email) VALUES('".$_POST['name']."','".$_POST['cell_no']."','".$_POST['email']."')";

      if(mysqli_query($conn,$sql)){

      	 header('location:home.php');
      	 //echo "Contact Saved";
      }
      else {
      	echo "Error" .mysqli_error($conn);
      }
    }//endifempty  
  }//endifsubmit
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
	<style>
	a{text-decoration: none;
      color: black;}
  </style>
  	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<button><a href="logout.php">Log Out</a></button>

	<h2>Add New Contact</h2>
	<form action="" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Cell No</td>
				<td><input type="text" name="cell_no"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn_submit">
					<button class="back"><a href="home.php">back</a></button>
				</td>
			</tr>
		</table>		
	</form>
</body>
</html>
	