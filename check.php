<?php
session_start();
include_once 'db/dboperations.php';

 $objUser = new User();
 
 	   $rest=$objUser->random_question($_SESSION['id']);
        $details=mysqli_fetch_assoc($rest);

 $answer=$details['answer'];
    $filename="";
	
	if($_GET['timeover'])
	{
		$filename="images/timeout.png";
		  $_SESSION['life']=2;
	 }
	
 else if (isset($_POST['Odd'])) {
	 if(strcmp($answer,"Odd")==0)
	 {
		  $filename="images/correct.jpg";
	 }
	 else
	 {
		  $filename="images/wrong.jpg";
		  $_SESSION['life']=$_SESSION['life']-1;
	 }
        
    }
	else {
      if(strcmp($answer,"Even")==0)
	 {
	       $filename="images/correct.jpg";
	 }
	 else
	 {
		   $filename="images/wrong.jpg";
		    $_SESSION['life']=$_SESSION['life']-1;
	 }
		
    }
 /*
 $random_key=array_rand($_SESSION['ques_no'],1);
 
 $rest=$objUser->random_question($_SESSION['ques_no'][$random_key]);
  unset($_SESSION['ques_no'][$random_key]);
 $details=mysqli_fetch_assoc($rest); */

 if(isset($_POST['submit']))
   {
	 $random_key=array_rand($_SESSION['ques_no'],1);
 //$_SESSION['ques_no'][$random_key];
 unset($_SESSION['ques_no'][$random_key]);

   }


 
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Time Challenge</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       
    </head>
    <body>
        <div class="container" align="center">
            <br/>
            <br/>
            
            <br/>
            
            <br/>
            <br/>
            <div class="card col-sm-4" id="ques">
                
                
               
                
                <img src="<?php echo $filename; ?>" width="350px" height="350px">
               
            
                               
            </div>
            <br/>
           
        </div>
    </body>
</html>