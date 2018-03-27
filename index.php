<?php
session_start();
include_once 'db/dboperations.php';

 $objUser = new User();
 $res=$objUser->question_ids();
 $_SESSION['ques_no']=array();
 while( $row = mysqli_fetch_assoc( $res) ){
	 array_push($_SESSION['ques_no'],$row['id']);

 }
 header("location:main.php");
?>