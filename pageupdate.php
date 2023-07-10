     <?php 
      session_start();
      include("connection.php");
      $id=$_REQUEST['id'];
       $sql=mysqli_query($conn,"select * from user where id='$id'");
      $aa=mysqli_fetch_array($sql);
      ?>
      <!DOCTYPE html>
<html lang="en">
<div class="footer_section layout_padding">
         <?php include('header.php');?>     
   </body>
   <head>
<div class="contact_section_2 layout_padding">
    <form method="POST" action="updateform.php" name="form2">
         <div class="container-fluid">
                  <div class="mail_section">
                     <div class="email_text">
                        <h style="font-size:25px; color:darkorange; position:relative;left:18%;">Update here!</h>
                        <div class="form-group" style="width:60%">
                           <input type="text" class="email-bt" placeholder="Name" name="name" value="<?php echo $aa['name'];?>">
                           <input type="hidden" class="email-bt" placeholder="Name" name="userid" value="<?php echo $aa['id'];?>">
                        </div>
                        <div class="form-group" style="width:60%">
                           <input type="text" class="email-bt" placeholder="mobile" name="mobile" value="<?php echo $aa['mobile'];?>">
                        </div>
                        <div class="form-group" style="width:60%">
                           <input type="text" class="email-bt" placeholder="Father Name" name="fname" value="<?php echo $aa['fname'];?>">
                        </div>
                        <div class="form-group" style="width:60%">
                           <input type="text" class="email-bt" placeholder="Mother Name" name="mname" value="<?php echo $aa['mname'];?>">
                        </div>
                       
                        <div class="form-group" style="width:60%">
                           <input type="text" class="email-bt" placeholder="password" name="psw" value="<?php echo $aa['psw'];?>">
                        </div>
                        <div class="send_btn">
                           <button type="submit" class="main_bt" name="submit" value="Submit">
                        </div>
                         <div class="send_btn" style="position:relative;left:-20%">
                           <input type="submit" name="submit" value="submit" class="main_bt send_btn" style="padding:10px; background-color:orange">
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
    </form>
</div>
      <div class="footer_section layout_padding">
         <?php include('footer.php');?>     
   </body>
</html>