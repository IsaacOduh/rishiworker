<?php 
	/**
	* 
	*/
	error_reporting(E_ALL);
	class database 
	{
		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $dbname = "rishiworker";
		public $con; 

		//get the database connection
		public function connect(){
			$this->con = new PDO('mysql:host='.$this->host.';dbname=rishiworker',$this->user,$this->pass);
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