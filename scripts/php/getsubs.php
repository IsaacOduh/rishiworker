<?php 
	include '../../includes/inc.objects.php';

	// if(isset($_GET['id'])){
	// 	$id = $_GET['id']
 // 		$query = "SELECT * FROM sub_services WHERE service_id = :id";
 // 		$stmt = $con->prepare($query);
 // 		$stmt->bindParam(':id',$id);
 // 		$stmt->execute();
 // 		$result = $stmt->fetchall();
 // 		if($result){
 // 			echo json_encode($result);
 // 		}
 // 	}
	if(isset($_POST)){
		extract($_POST);
		$query = "SELECT * FROM sub_services WHERE service_id = :id";
 		$stmt = $con->prepare($query);
 		$stmt->bindParam(':id',$id);
 		$stmt->execute();
 		$result = $stmt->fetchall();
		$options = "<option value=''>Select Sub Service</option>";
		foreach ($result as $row) {
			$options .= "<option value='{$row['id']}'>{$row['name']}</option>";
		}
		echo $options;
	}
 ?>