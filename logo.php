<?php
session_start();
include_once 'db/dboperations.php';


$objUser = new User();
       $idq=$_GET['id'];
		
 	   $rest=$objUser->random_question($idq);
        $details=mysqli_fetch_assoc($rest);

 $answer=$details['answer'];
    

   
   /*
    $random_key=array_rand($_SESSION['ques_no'],1);
	   $rest=$objUser->random_question($_SESSION['ques_no'][$random_key]);
  unset($_SESSION['ques_no'][$random_key]);
 $details=mysqli_fetch_assoc($rest);
	 $random_key=array_rand($_SESSION['ques_no'],1);
 //$_SESSION['ques_no'][$random_key];
 unset($_SESSION['ques_no'][$random_key]);
*/
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
        cnt=10;
        life=3;
        function changelife(){
           if(life==3)
           {
               $("#lf1").removeClass("far");
               $("#lf2").removeClass("far");
               $("#lf3").removeClass("far");
               $("#lf1").addClass("fas");
               $("#lf2").addClass("fas");
               $("#lf3").addClass("fas");
           }
           if(life==2)
           {
               $("#lf1").removeClass("far");
               $("#lf2").removeClass("far");
               $("#lf3").removeClass("fas");
               $("#lf1").addClass("fas");
               $("#lf2").addClass("fas");
               $("#lf3").addClass("far");
           }
           if(life==1)
           {
               $("#lf1").removeClass("far");
               $("#lf2").removeClass("fas");
               $("#lf3").removeClass("fas");
               $("#lf1").addClass("fas");
               $("#lf2").addClass("far");
               $("#lf3").addClass("far");
           }
           if(life==0)
           {
               $("#lf1").removeClass("fas");
               $("#lf2").removeClass("fas");
               $("#lf3").removeClass("fas");
               $("#lf1").addClass("far");
               $("#lf2").addClass("far");
               $("#lf3").addClass("far");
           }
        }
        $(document).ready(function(){
           changelife();
        });
        var changebtn = setInterval(function(){
                 var rndarr = [];
                 var flg=0;
                 for(var i=0;i<4;i++)
                 {
                    var gen=Math.round(Math.random()*3);
                    for(var j=0;j<rndarr.length;j++)
                    {
                       if(rndarr[j]==gen)
                       {
                            flg=1;
                            break;
                       }
                    }
                    if(flg==1)
                    {
                        gen=Math.round(Math.random()*3);
                        flg=0;
                        i--;
                        continue;
                    }
                    rndarr[i]=gen;
                    flg=0;
                 }
                 var sidarr = [];
                 var stxtarr = [];
                 for(var i=0;i<4;i++)
                 {
                     var sid = $("#frm").find("button").eq(i).attr("id");
                     var stxt = $("#frm").find("button").eq(i).text();
                     sidarr[rndarr[i]]=sid;
                     stxtarr[rndarr[i]]=stxt;
                 }
                 for(var i=0;i<4;i++)
                 {
                    $("#frm").find("button").eq(i).attr("id",sidarr[i]);
                    $("#frm").find("button").eq(i).attr("value",stxtarr[i]);
                    $("#frm").find("button").eq(i).text(stxtarr[i]);
                 }
            },3000);
        var tmr = setInterval(function(){
           $(document).ready(function(){
			   
               cnt--;
               if(cnt==0)
               {
                   clearInterval(changebtn);
                   clearInterval(tmr);
				   window.location = "check.php?timeover=1";
               }
               if(cnt>=5)
               {
                   $("#tmr").html("<h3 style=\"color: blue;\"><i id=\"tmr\" class=\"fas fa-stopwatch\" style=\"font-size: 30px;\"></i>&nbsp;&nbsp;"+cnt+" s</h3>");
               }
               if(cnt<5 && cnt>0)
               {
                   $("#tmr").html("<h3 style=\"color: red;\"><i id=\"tmr\" class=\"fas fa-stopwatch\" style=\"font-size: 30px;\"></i>&nbsp;&nbsp;"+cnt+" s</h3>");
               }
           });
        },1000);
        </script>
    </head>
    <body>
        <div class="container" align="center">
            <br/>
            <br/>
            <h1>Identify Logo</h1>
            <br/>
            <h3>Life : </h3>
            <i id="lf1" class="fas fa-heart" style="font-size: 30px;color: red;"></i>
            <i id="lf2" class="fas fa-heart" style="font-size: 30px;color: red;"></i>
            <i id="lf3" class="far fa-heart" style="font-size: 30px;color: red;"></i>
            <br/>
            <br/>
            <div class="card col-sm-4" id="ques">
                <div class="card-body">
                <br/>
                <h2 class="card-title">Question : </h2>
                <br/>
                <img src="images/<?php echo $details['image']; ?>" width="100px" height="140px">
                <br/><br/>
                <form id="frm" action="check.php?timeover=0" method="POST">
                    <button id="opt1" name="opt1" class="btn btn-outline-primary col-sm-4" value="<?php echo $details['opt1']; ?>"><?php echo $details['opt1']; ?></button>&nbsp;&nbsp;
                    <button id="opt2" name="opt2" class="btn btn-outline-primary col-sm-4" value="<?php echo $details['opt2']; ?>"><?php echo $details['opt2']; ?></button><br/><br/>
                    <button id="opt3" name="opt3" class="btn btn-outline-primary col-sm-4" value="<?php echo $details['opt3']; ?>"><?php echo $details['opt3']; ?></button>&nbsp;&nbsp;
                    <button id="opt4" name="opt3" class="btn btn-outline-primary col-sm-4" value="<?php echo $details['opt4']; ?>"><?php echo $details['opt4']; ?></button>
                </form>
                </div>                
            </div>
            <br/>
            <div>
                <h3>Timer : </h3>
                <h3 id="tmr" style="color: blue;"><i class="fas fa-stopwatch" style="font-size: 30px;"></i>&nbsp;&nbsp;10 s</h3>
            </div>
        </div>
    </body>
</html>