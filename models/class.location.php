<?php 
	//This is the location module
	class Location{
		private $con;

		public function __construct($db){
			$this->con = $db;
		}

		public function newlocation($location){
			$query = "INSERT INTO locations (id,name) VALUES (null,:name)";
			$stmt = $this->con->prepare($query);
			$location = htmlentities($location);
			$stmt->bindParam(':name',$location);
			if($stmt->execute()){
				return 1;
			}else{
				return 0;
			}
			$this->con = null;
		}

		public function getall(){
			$query = "SELECT * FROM locations";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}

		public function findone($id){
			$query = "SELECT name FROM locations WHERE id = :id";
			$stmt = $this->con->prepare($query);
			$stmt->bindParam(':id',$id);
			$stmt->execute();
			$result = $stmt->fetchAll();
			foreach($result as $row){
				return $row['name'];
			}
			return true;
		}

		public function update(){}

		public function delete(){}
	}

 ?>