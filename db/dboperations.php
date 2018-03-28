<?php
$no1=0;
if (!isset($_SESSION))
    session_start();
include_once 'dbconnect.php';


class User {

    var $dbObj;

    public function __construct() {
        $this->dbObj = new db();
    }



    public function random_question($id)
	{ 
	
	

	//$sql = "SELECT * FROM questions where id not in('$qarr') ORDER BY RAND() LIMIT 1";	
		//$sql = "SELECT * FROM questions where id='$id' ORDER BY RAND() LIMIT 1";
     $sql = "SELECT * FROM questions where id='$id'";		
	
		return $this->dbObj->ExecuteQuery($sql, 1);
	
		
	}
	

 public function question_ids()
	{ 
	
	$sql = "SELECT id FROM questions";	
	
		return $this->dbObj->ExecuteQuery($sql, 1);
	
		
	}

   
	
	public function insert_score_table($Name,$Score,$Level,$IP)
	{
		$sql = "INSERT INTO scores( Name,Score,Level,IP) VALUES
		('$Name', '$Score','$Level','$IP')";
		//$sql="insert into scores(Name,Score,Level,IP) values('$Name','$Score','$Level','$IP') ";
		return $this->dbObj->ExecuteQuery($sql, 2); 
		
	}
	
	public function fetch_highscores()
	{
			$sql = "SELECT * FROM scores  ORDER BY Score DESC LIMIT 5";	

		return $this->dbObj->ExecuteQuery($sql, 1);
	}

}

?>
