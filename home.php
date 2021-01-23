<?php
session_start();
include'connection.php';
/*
if(!isset($_SESSION['id'])){

	header('location:login.php');
}*/


?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
	a{text-decoration: none;
      color: black;}
      body{
      	background-image: url('background.jpeg');
      	background-size: cover;      	
      	text-align: center;
      	font-size: 14px;
      }
      table{
      	margin-left: auto;
      	margin-right: auto;
      	font-size: 20px;
      }
  </style>
</head>
<body>
	<button><a href="logout.php">Log Out</a></button>
   <!-- <h1>Welcome <?php echo $_SESSION['name']; ?></h1> -->
    <h1>Welcome <?php echo $_SESSION['email']; ?></h1>

    <h2>Phone Directory</h2>
	<button><a href="add.php">Add New</a></button>
	<br/><br/>
	<table border="1" cellspacing="0" cellpadding="5px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Cell No</th>
			<th>Email</th>
			<th>Action</th>		
		</tr>
		<?php
            $sql= "SELECT id,name,cell_no,email FROM dir";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
             	while ($row=mysqli_fetch_assoc($result)) {             			
		?>
		<tr>
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['cell_no']?></td>
			<td><?php echo $row['email']?></td>
			<td>
				<button><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></button>
				<button><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></button>
			</td>
		</tr>
		<?php
	         }
		    }
		?>
	</table>
</body>
</html>