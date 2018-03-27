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
        life=0;
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
                  var id1 = $("#frm").find("button").first().attr("id");
                  var id2 = $("#frm").find("button").next().attr("id");
                  var txt1 = $("#frm").find("button").first().text();
                  var txt2 = $("#frm").find("button").next().text();
                  $("#frm").find("button").first().attr("id",id2);
                  $("#frm").find("button").next().attr("id",id1);
                  $("#frm").find("button").first().text(txt2);
                  $("#frm").find("button").next().text(txt1);
                  changelife();
            },3000);
        var tmr = setInterval(function(){
           $(document).ready(function(){
               cnt--;
               if(cnt==0)
               {
                   clearInterval(changebtn);
                   clearInterval(tmr);
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
            <h1>Odd or Even</h1>
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
                <h3 style="color: blue;">1 + 2*3</h3>
                <br/>
                <form id="frm" action="" method="POST">
                    <button id="odd" class="btn btn-outline-primary col-sm-4">Odd</button>&nbsp;&nbsp;
                    <button id="even" class="btn btn-outline-primary col-sm-4">Even</button>
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