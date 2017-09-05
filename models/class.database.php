<?php 
	/**
	* 
	*/
	ini_set("display_errors", "1");
	error_reporting(E_ALL);
	class database 
	{
		private $host = "ffn96u87j5ogvehy.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
		private $user = "seel57wx441nve7c";
		private $pass = "jy9wxxb4kccmai6l";
		private $dbname = "n2rypzl24bwfzkoz";
		public $con; 

		//get the database connection
		public function connect(){
			$this->con = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.',$this->user,$this->pass);
			return $this->con;
		}

		public function close_db(){
			//to close a pdo connection, you set the pdo connection variable to null
			$this->con = null;
		}
		// public function connect(){
		// 	$this->con = mysqli_connect($this->host,$this->user,$this->password,$this->dbname);
		// 	return $this->con;
		// }

		public function insert(){

		}

		public function fetch(){

		}

		
	}

 ?>
