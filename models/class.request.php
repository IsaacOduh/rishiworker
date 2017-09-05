<?php 
	class Request{
		private $con;

		function __construct($db){
			$this->con = $db;
		}

		public function newrequest($request_service,$fullname,$phone_1,$phone_2,$location,$address,$landmark,$budget,$description,$requestid){
			$query = "INSERT INTO requests (id,request_id,request_service,fullname,phone_1,phone_2,location,address,landmark,budget,description,status,created_at) VALUES (null,:request_id,:request_service,:fullname,:phone_1,:phone_2,:location,:address,:landmark,:budget,:description,'0',NOW())";
			$stmt = $this->con->prepare($query);
			//bind parameters
			$stmt->bindParam(':request_id',$requestid);
			$stmt->bindParam(':request_service',$request_service);
			$stmt->bindParam(':fullname',$fullname);
			$stmt->bindParam(':phone_1',$phone_1);
			$stmt->bindParam(':phone_2',$phone_2);
			$stmt->bindParam(':location',$location);
			$stmt->bindParam(':address',$address);
			$stmt->bindParam(':landmark',$landmark);
			$stmt->bindParam(':budget',$budget);
			$stmt->bindParam(':description',$description);
			// $stmt->bindParam(':status',$status);

			if($stmt->execute()){
				return true;
			}else{
				return false;
			}

			//some sort of fail safe for destroying connection.
			$stmt = null;
			$this->con = null;
		}

		public function getall(){
			$query = "SELECT * FROM requests";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}

		public function searchone($id){
			$query = "SELECT * FROM requests WHERE id = '$id' ORDER BY id ASC";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}
		public function update(){}
		public function cancel(){}
	}
 ?>