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
 $no1=0;
 $highscores=$objUser->fetch_highscores();
 $no1=mysqli_num_rows( $highscores );
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
      
	  <script>
      document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
          return false;
        }
      }
      document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
          return false;
        }
      }
      document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
          return false;
        }
      }
    </script>
	  
	  <script type="text/javascript">
	   $(document).ready(function(){
            $(document).bind("contextmenu",function(e){
   return false;
 });
		   
		    if (window.history && window.history.pushState) {

        $(window).on('popstate', function() {
          var hashLocation = location.hash;
          var hashSplit = hashLocation.split("#!/");
          var hashName = hashSplit[1];

          if (hashName !== '') {
            var hash = window.location.hash;
            if (hash === '') {
              alert('Back button not allowed');
                window.location='index.php';
                return false;
            }
          }
        });

        window.history.pushState('forward', null, './#forward');
      }

		 
        });	 
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
                <img src="images/intro.jpg" width="250px" height="250px">
               </a>
            <br/>
			<br/>
			<form action="<?php echo $link; ?>" method="post">
			  <input type="text" name="Name"  placeholder="Your Name"> <br/> <br/> &nbsp; &nbsp;
             <button id="newgame"  name="newgame"class="btn btn-outline-primary col-sm-4" value="w">NEW GAME</button>&nbsp;&nbsp; <br/> <br/>
             </form> 
			 <button id="leaderboard" data-toggle="modal" data-target="#myModal" class="btn btn-outline-primary col-sm-4" >HIGHSCORES</button>&nbsp;&nbsp; <br/>
            
			
            </div>
            <br/>
			
						  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          				<div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
									<h3> HIGHSCORES </h3>
									       <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
				  <th>Rank</th>
                  <th>Name</th>
				  <th>Score</th>
                  <th>Level</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  
                </tr>
              </tfoot>
              <tbody>
                 <?php
				 $cnt=1;
                              if( $no1==0 ){
                                 echo '<tr><td colspan="6">No Result Found!!!</td></tr>';
		
                                 }else{
                                while( $row = mysqli_fetch_assoc( $highscores ) ){
									
									
                               echo " <tr > <td>#{$cnt} </td><td>{$row['Name']} </td><td>{$row['Score']} </td><td>{$row['Level']}</td></tr>\n";
                              $cnt=$cnt+1;
							  }
                                  }
                                      ?>
              </tbody>
            </table>
          </div>
									</div>
									
							</div>	
		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
           
        </div>
    </body>
</html>



