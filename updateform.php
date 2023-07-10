<?php 
      session_start();
      include("connection.php");
      $id=$_POST['userid'];
      $a=$_POST['name'];
$b=$_POST['mobile'];
$c=$_POST['fname'];
$d=$_POST['usn'];
$e=$_POST['psw'];
$f=$_POST['mname'];
       $sql=mysqli_query($conn,"update user set name='$a',mobile='$b',fname='$c',psw='$e',mname='$f' where id='$id'");
       echo '<script>alert("Update successfully");</script>';
echo '<script>window.location.href = "adminform.php";</script>';
    
      ?>
      