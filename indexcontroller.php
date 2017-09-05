<?php 
	//This will hold all the activity for the main app
	//but note that it can actually be broken d`own into varying points in the application

	// Extract the get variables
	extract($_GET);
	$param = array_values($_GET);

	switch ($param) {
		case array("home"):
			$services = $service->getall();
			require 'views/view.home.php';
		break;
		case array("register"):
		    //Going to write a controller to get all services
            $result = $service->getall();
            $locations = $location->getall();
			require 'views/view.register.php';
		break;
		case array("register","new"):
			if($_POST){
				extract($_POST);
				$process = $vendor->addVendor($fullname,$address,$landmark,$phone,$email,$service,$subservice,$location,$description);
				if($process){
					echo "Account Created Successfully";
				}else{
					echo "Error during account, please ensure you filled the form correctly";
				}
			}
			require 'views/view.register.php';
		break;
		case array("service","view",true):
			//Going to write a controller to get all subservices for this id

			$result = $service->findone($id);
			$subservices = $subservice->findall($id);
			require 'views/view.service.php';
		break;
		// This is for the request trail
		case array("request","new",true):
			$locations = $location->getall();
			$requestService = $subservice->searchone($id);
			require 'views/view.request.php';
		break;
		case array("request","submit"):
			if($_POST){
				extract($_POST);
				print_r($_POST);
				$message = "";
				$process = $request->newrequest($request_service,$fullname,$phone_1,$phone_2,$location,$address,$landmark,$budget,$description,$requestid);
				if($process){
					$message = "Successfully Sent Request";
				}else{
					$message = "Problem sending Request";
				}

			}

			require 'views/view.confirm.php';
		break;
		default:
			$services = $service->getall();
			require 'views/view.home.php';
		break;
	}

 ?>