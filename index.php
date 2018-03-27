<?php
session_start();
include_once 'db/dboperations.php';
$_SESSION['life']=3;
$_SESSION['score']=0;
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
 echo $details['id'];
  echo $details['type'];
  $_SESSION['id']=$details['id'];
  $nid=$details['id'];
 
  if(strcmp($details['type'],"oddeven")==0)
 {
	 
	 header("location:oddeven.php?id=".$nid);
	  
 }
 else
 {
	 header("location:logo.php?id=".$nid);
 }  

 //header("location:main.php");
?>