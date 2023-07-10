<?php session_start(); 
include("connection.php");
if($_POST['submit']=='login')
{
$a=$_POST['userId'];
$b=$_POST['password'];
$sql=mysqli_query($conn,"select * from user where usn='$a' and psw='$b'");
if (mysqli_num_rows($sql)==1){
         $aa=mysqli_fetch_array($sql);
         if($aa['usertype']==1)
            {
                $_SESSION['id']=$aa['id'];
                echo '<script>window.location.href="userform.php";</script>';

            }
            else if($aa['usertype']==2)
            {
                $_SESSION['id']=$aa['id'];
                echo '<script>window.location.href="adminform.php";</script>';
            }
    else
    {
        echo '<script>alert("Your Account is locked");</script>';
        echo '<script>window.location.href="index.php";</script>';
    }
    
      }
      else{
        echo '<script>alert("Your User Id or Password Not Match");</script>';
echo '<script>window.location.href = "index.php";</script>';
      }
}
else
{
    echo '<script>alert("Please register your self");</script>';
echo '<script>window.location.href ="register.php";</script>';
}

?>