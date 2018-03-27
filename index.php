<?php
session_start();
include_once 'db/dboperations.php';
/*if (empty($_SESSION['regno'])) {
    header("location:../index.php");
    exit();
}  */

 $objUser = new User();
 $qarr = array(1);
 //array_push($qarr,2);
 //$random_keys=array_rand($qarr,1);

 $rest=$objUser->random_question($qarr);
$details=mysqli_fetch_assoc($rest);


   if(isset($_POST['submit']))
   {
	   $day1=$_POST['datetime'];
	   //$day1 = strtotime($_POST["datetime"]);
       //$day1 = date('Y-m-d H:i:s', $day1); 
	   $result=$objUser->request($_SESSION['regno'],$_POST['category'],$_POST['reason'],$day1);
	   echo "<script>alert('Request has been sent...Stay Tuned!!!')</script>";

   }
	
	
	
	?>
	
	
	<html>
	<body>
	<?php echo $details['id'] ?>
	
	</body>
	</html>