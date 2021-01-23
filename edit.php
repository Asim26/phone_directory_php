<?php
  session_start();
  
  include 'connection.php';

  if(isset($_POST['btn_submit'])){

       $sql="UPDATE dir SET name='".$_POST['name']."',
                                cell_no='".$_POST['cell_no']."',
                                email='".$_POST['email']."'
                                WHERE id='".$_POST['txt_id']."'";

        if(mysqli_query($conn,$sql)){
            header('Location:home.php');
           }
          else {
            echo "Error".mysqli_error($conn); 
          };

        }

        $id='';
        $name='';
        $cell_no='';
        $email='';

        if(isset($_GET['id'])){
          $sql="SELECT id,name,cell_no,email FROM dir WHERE id=".$_GET['id'];
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0){
          	$row=mysqli_fetch_assoc($result);
          	$id=$row['id'];
          	$name=$row['name'];
          	$cell_no=$row['cell_no'];
            $email=$row['email'];

           /* if(count($row)>1){
              header('location:login.php');
            }*/

          }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
    <style>
    a{
      text-decoration: none;
      color: black;}
   </style>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <button><a href="logout.php">Log Out</a></button>

  <h2>Edit Contact</h2>
    <form action="" method="post">
      <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" value="<?php echo $name?>"></td>
        </tr>
        <tr>
          <td>Cell No</td>
          <td><input type="text" name="cell_no" value="<?php echo $cell_no?>"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" value="<?php echo $email?>"></td>
        </tr>
        <tr>
          <td><input type="hidden" name="txt_id" value="<?=$id?>"></td>
          <td><input type="submit" name="btn_submit" value="Edit">
            <button class="back"><a href="home.php">back</a></button>
          </td>
        </tr>
      </table>
    </form>
</body>
</html>
