<?php 
	class Vendor{
		private $con;

		public function __construct($db){
			$this->con = $db;
		}

		public function addVendor($name,$address,$landmark,$phone,$email,$service,$subservice,$location,$description){
			//This is used to add a new vendor to the page
			$query = "INSERT INTO vendor (id,name,address,landmark,phone,email,service,subservice,location,description,status) VALUES (null,:name,:address,:landmark,:phone,:email,:service,:subservice,:location,:description)";
			//prepare the statement
			$stmt = $this->con->prepare($query);
			//bind parameters
			$stmt->bindParam(':name',$name);
			$stmt->bindParam(':address',$address);
			$stmt->bindParam(':landmark',$landmark);
			$stmt->bindParam(':phone',$phone);
			$stmt->bindParam(':email',$email);
			$stmt->bindParam(':service',$service);
			$stmt->bindParam(':subservice',$subservice);
			$stmt->bindParam(':location',$location);
			$stmt->bindParam(':description',$description);
			

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
			$query = "SELECT * FROM vendor";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}
		public function findVendor($id){
			$query = "SELECT * FROM vendor WHERE id = '$id'";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}
		public function approveVendor($id){}
		public function update($id,$name,$address,$landmark,$phone,$email,$service,$subservice,$location,$description,$status){
			$smp = "UPDATE `vendor` SET `name` = 'Isaac Oduh', `address` = 'John hk aaa', `landmark` = 'hkhkasA', `phone` = 'khkjhkhaa', `email` = 'hksajhk@gmail.com', `description` = 'hjkkhkhadsa' WHERE `vendor`.`id` = 1";
			$query = "UPDATE vendor SET name=:name, address=:address, landmark=:landmark, phone =:phone, email = :email, service =:service, subservice = :subservice, location = :location, description = :description, status = :status WHERE id = '$id'";
			//prepare the statement
			$stmt = $this->con->prepare($query);
			//bind parameters
			$stmt->bindParam(':name',$name);
			$stmt->bindParam(':address',$address);
			$stmt->bindParam(':landmark',$landmark);
			$stmt->bindParam(':phone',$phone);
			$stmt->bindParam(':email',$email);
			$stmt->bindParam(':service',$service);
			$stmt->bindParam(':subservice',$subservice);
			$stmt->bindParam(':location',$location);
			$stmt->bindParam(':description',$description);
			$stmt->bindParam(':status',$status);
			if($stmt->execute()){
				return true;
			}else{
				return false;
			}

			//some sort of fail safe for destroying connection.
			$stmt = null;
			$this->con = null;
		}
		public function deleteVendor(){}
	}

 ?>