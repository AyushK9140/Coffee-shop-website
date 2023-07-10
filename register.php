<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("header.php");?>
<div class="contact_section_2 layout_padding">
    <form method="POST" action="form.php" name="form2">
         <div class="container-fluid">
                  <div class="mail_section">
                     <div class="email_text">
                        <h style="font-size:25px; color:darkorange; position:relative;left:18%;">Register here!</h>
                        <div class="form-group" style="width:60%">
                           <input type="text" class="email-bt" placeholder="Name" name="name">
                        </div>
                        <div class="form-group" style="width:60%">
                           <input type="text" class="email-bt" placeholder="mobile" name="mobile">
                        </div>
                        <div class="form-group" style="width:60%">
                           <input type="text" class="email-bt" placeholder="Father Name" name="fname">
                        </div>
                        <div class="form-group" style="width:60%">
                           <input type="text" class="email-bt" placeholder="Mother Name" name="mname">
                        </div>
                        <div class="form-group" style="width:60%">
                           <input type="text" class="email-bt" placeholder="username" name="usn">
                        </div>
                        <div class="form-group" style="width:60%">
                           <input type="password" class="email-bt" placeholder="password" name="psw">
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