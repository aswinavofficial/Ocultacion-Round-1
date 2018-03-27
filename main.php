<?php
session_start();
include_once 'db/dboperations.php';

 $objUser = new User();
 $random_key=array_rand($_SESSION['ques_no'],1);
 
 $rest=$objUser->random_question($_SESSION['ques_no'][$random_key]);
  unset($_SESSION['ques_no'][$random_key]);
 $details=mysqli_fetch_assoc($rest);

 if(isset($_POST['submit']))
   {
	 $random_key=array_rand($_SESSION['ques_no'],1);
 //$_SESSION['ques_no'][$random_key];
 unset($_SESSION['ques_no'][$random_key]);

   }


 
 ?>
 
 <html>
 <body>
 <?php echo $details['id'] ?>
 <form action="main.php" method="post">
 <input type="submit" name="submit" value="Submit">
 </form>
 </body>
 </html>
 