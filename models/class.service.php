<?php 
	class Service{
		private $con;

		public function __construct($db){
			$this->con = $db;
		}

		public function addservice($service){
			$query = "INSERT INTO services (id,service) VALUES (null,:service)";
			$stmt = $this->con->prepare($query);
			$service =htmlentities($service);
			$stmt->bindParam(':service',$service);
			if($stmt->execute()){
				echo "Upload Successful";
			}else{
				echo "Upload Unsuccesful";
			}
		}

		public function getall(){
			$query = "SELECT * FROM services";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;

		}

		public function findone($id){
			$query = "SELECT service FROM services WHERE id = :id";
			$stmt = $this->con->prepare($query);
			$stmt->bindParam(':id',$id);
			$stmt->execute();
			$result = $stmt->fetchAll();
			foreach($result as $row){
				return $row['service'];
			}
			return true;
		}
		public function deleteService($id){
			$query = "DELETE FROM services WHERE id = :id ";
			$stmt = $this->con->prepare($query);
			$stmt->bindParam(':id',$id);
			if($stmt->execute()){
				return 1;
			}else{
				return 0;
			}
		}
	}
 ?>