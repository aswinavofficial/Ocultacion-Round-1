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

    
    public function random_question($qarr)
	{
	$sql = "SELECT * FROM questions ORDER BY RAND() LIMIT 1";	
		
		return $this->dbObj->ExecuteQuery($sql, 1);
	
		
	}
	
	
	


}

?>
