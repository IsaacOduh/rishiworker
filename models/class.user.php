<?php 

	class User{
		private $con;

		public function __construct($db){
			$this->con = $db;
		}

		public function newAdmin($name,$username,$password){
			$query= "INSERT INTO admin(id,name,username,password) VALUES (null,:name,:username,:password)";
			//prepare the statemet
			$stmt = $this->con->prepare($query);
			// bindParams
			$stmt->bindParam(':name',$name);
			$stmt->bindParam(':username',$username);
			$stmt->bindParam(':password',$password);

			if($stmt->execute()){
				echo "SignUp Successful";
			}else{
				echo "SignUp Successful";
			}

			//some sort of fail safe for destroying connection.
			$stmt = null;
			$this->con = null;
		}
		public function adminAuth($username,$password){
			$query = "SELECT * FROM admin WHERE username = :username";
			$stmt = $this->con->prepare($query);
			$stmt->bindParam(':username',$username);
			// $stmt->bindParam(':password',$password);
			$stmt->execute();

			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			if($result['password'] == $password){
				// $_SESSION['admin'] = true;
				return true;
			}else{
				return false;
			}
		}
	}
 ?>