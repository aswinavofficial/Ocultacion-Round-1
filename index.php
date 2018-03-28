<?php
session_start();
include_once 'db/dboperations.php';
$_SESSION['life']=3;
$_SESSION['score']=0;
$_SESSION['count']=1;
 $objUser = new User();
$res=$objUser->question_ids();
 $_SESSION['ques_no']=array();
 while( $row = mysqli_fetch_assoc( $res) ){
	 array_push($_SESSION['ques_no'],$row['id']);

 }
 $random_key=array_rand($_SESSION['ques_no'],1);
 
 $rest=$objUser->random_question($_SESSION['ques_no'][$random_key]);
  unset($_SESSION['ques_no'][$random_key]);
 $details=mysqli_fetch_assoc($rest);

  $_SESSION['id']=$details['id'];
  $nid=$details['id'];
 
  if(strcmp($details['type'],"oddeven")==0)
 {
	 
	// header("location:oddeven.php?id=".$nid);
	  $link="oddeven.php?id=".$nid;
 }
 else
 {
	// header("location:logo.php?id=".$nid);
	  $link="logo.php?id=".$nid;
 }  

 //header("location:main.php");
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
      <script type="text/javascript">   
function Redirect() 
{  
window.location="<?php echo $link; ?>"; 
} 

//setTimeout('Redirect()', 3000);   
</script> 
    </head>
    <body>
        <div class="container" align="center">
            <br/>
            <br/>
            
            <br/>
            
            
            <div class="card col-sm-4" id="ques">
                
                <h2 class="card-title">TIME CHALLENGE</h2>
               
                <a href="index.php" >
                <img src="images/intro.jpg" width="350px" height="350px">
               </a>
            <br/>
			<br/>
             <button id="newgame" onClick="Redirect()" name="newgame"class="btn btn-outline-primary col-sm-4" value="w">NEW GAME</button>&nbsp;&nbsp;
              
            </div>
            <br/>
           
        </div>
    </body>
</html>



