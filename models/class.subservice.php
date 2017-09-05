<?php 
	class SubService{
		private $con;

		function __construct($db){
			$this->con = $db;
		}

		public function addsubservice($service,$subservice){
			$query = "INSERT INTO sub_services (id,service_id,name,status) VALUES (null,:service,:name,0)";
			$stmt = $this->con->prepare($query);
			$service =htmlentities($service);
			$subservice = htmlentities($subservice);
			$stmt->bindParam(':service',$service);
			$stmt->bindParam(':name',$subservice);
			if($stmt->execute()){
				return 1;
			}else{
				return 0;
			}
		}

		public function getall(){
			$query = "SELECT * FROM sub_services ORDER BY service_id ASC";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}

		public function findone($id){
			$query = "SELECT name FROM sub_services WHERE id = :id";
			$stmt = $this->con->prepare($query);
			$stmt->bindParam(':id',$id);
			$stmt->execute();
			$result = $stmt->fetchAll();
			foreach($result as $row){
				return $row['name'];
			}
			return true;
		}

		public function findall($id){
			$query = "SELECT * FROM sub_services WHERE service_id = '$id' ORDER BY service_id ASC";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}

		public function searchone($id){
			$query = "SELECT * FROM sub_services WHERE id = '$id' ORDER BY id ASC";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}
		
		public function updateInfo(){}

		public function delete(){}
	}


 ?>