<?php session_start();
include ('connection.php');
$sql= mysqli_query($conn,"SELECT * FROM user where usertype!='2'");
if($_SESSION['id']!='')
 ?> <table>
 
            <tr>
            <th>id</th>
            <th>NAME</th>
            <th>Mobileno.</th>
            <th>FATHER NAME</th>
            <th>username</th>
            <th>Password</th>
            <th>Mother Name</th>
            <th>datetime</th>
            <th>update</th>
            <th>Delete</th>
            </tr>

    
    
<?php
  $i=0;
while($row = mysqli_fetch_array($sql)) {
?>
<tr>
    <td><?php echo $i=$i+1; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["mobile"]; ?></td>
    <td><?php echo $row["usn"]; ?></td>
    <td><?php echo $row["psw"]; ?></td>
    <td><?php echo $row["mname"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
     <td><a href="pageupdate.php?id=<?php echo $row['id'];?>">Edit</a></td>
     <td><a href="pagedelete.php?id=<?php echo $row['id'];?>">Delete</a></td>
    
</tr>
<?php
}
?>
</table>