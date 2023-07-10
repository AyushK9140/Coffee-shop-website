<?php 
      session_start();
      include("connection.php");
      $id=$_REQUEST['id'];
      $sql=mysqli_query($conn,"delete from user where id='$id'");
      echo '<script>alert("Delete successfully");</script>';
      echo '<script>window.location.href ="adminform.php";</script>';
?>
      