<?php session_start();
include ('connection.php');
if($_SESSION['id']!='')
{

$id= $_SESSION['id'];
$sql= mysqli_query($conn,"SELECT * FROM user where id='$id'");
 ?><table>
            <tr>
            <th>id</th>
            <th>NAME</th>
            <th>Mobileno.</th>
            <th>FATHER NAME</th>
            <th>username</th>
            <th>Password</th>
            <th>Mother Name</th>
            <th>datetime</th>
            </tr>
    
    
<?php
  $i=0;
while($row = mysqli_fetch_array($sql)) {
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["mobile"]; ?></td>
    <td><?php echo $row["usn"]; ?></td>
    <td><?php echo $row["psw"]; ?></td>
    <td><?php echo $row["mname"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
    
</tr>
</table>
<?php
}
}
?>



