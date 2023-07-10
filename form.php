<?php include('connection.php');
if($_POST['submit']=='submit')
{
$a=$_POST['name'];
$b=$_POST['mobile'];
$c=$_POST['fname'];
$d=$_POST['usn'];
$e=$_POST['psw'];
$f=$_POST['mname'];

$date=date('d-m-y h:i:s');

//echo "insert into user(name,mobile,fname,mname,username,password,gender,address) values('$a','$b','$c','$d','$e','$f','$g','$h')";
echo $sql=mysqli_query($conn,"insert into user(name,mobile,fname,usn,psw,mname,usertype,datetime) values('$a','$b','$c','$d','$e','$f','1','$date')");
echo '<script>alert("submitted successfully");</script>';
echo '<script>window.location.href = "index.php";</script>';
// $a=$_POST['username'];
// $b=$_POST['password'];
// $sql=mysqli_query($conn,"select * from user where username='$a' and password='$b')");
// if (mysqli_num_rows($sql)==1){
//     echo ("done");

}
else
{
    echo '<script>alert("Please register your self");</script>';
echo '<script>window.location.href = "register.php";</script>';
}










?>