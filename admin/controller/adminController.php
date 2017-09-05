<?php 
	//extract the get variables
	extract($_GET);
	$param = array_values($_GET);

	if(isset($_SESSION['admin'])){
		switch ($param) {
			case array("dashboard"):
				require 'views/admin.home.php';
			break;
			// This is for service module controller
			case array("services"):
				// write the service getall services
				$result = $service->getall();
				require 'views/services/admin.services.php';
			break;
			case array("services","new"):
				require 'views/services/admin.newservice.php';
			break;
			case array("services","add"):
				if(isset($_POST)){
					extract($_POST);
					$service->addService($servicename);
					// if($service->addService($service)){
					// 	echo "service added successfully.";
					// }else{
					// 	echo "something went wrong";
					// }
				}
			break;
			case array("service","view",true):
				require 'views/services/admin.viewservice.php';
			break;
			
			case array("service","delete",true):
				require 'views/services/admin.deleteservice.php';
			break;
			case array("service","delete",true,true):
				if($service->deleteService($id)){
					echo "Successfully Deleted!";
					echo "<a href='index.php?page=services'>Services</a>";
				}else{
					echo "Error During Processing";
				}
			break;
			// End Services Module
			// Admin Subservices
			case array("subservices"):
				$result_subs = $subservice->getall();
				require 'views/sub_services/admin.subservices.php';
			break;
			case array("subservices","add"):
				$result = $service->getall();
				require 'views/sub_services/admin.newsub_service.php';
			break;
			case array("subservice","add","process"):
				if(isset($_POST)){
					extract($_POST);
					$process = $subservice->addsubservice($serviceid,$subservicename);
					if($process){
						echo "Added Successfully! <a href='index.php?page=subservices'>Sub Services</a>";
					}else{
						echo "Oops something went wrong. Please ensure that you filled the form correctly.";
					}
				}
			break;
			//End Subservices
			// Admin Locations modules
			case array("locations"):
				$result_location = $location->getall();
				require 'views/locations/admin.locations.php';
			break;
			case array("locations","add"):
				require 'views/locations/admin.new_location.php';
			break;
			case array("locations","add","process"):
				if(isset($_POST)){
					extract($_POST);
					$process = $location->newlocation($name);
					if($process){
						echo "Added Successfully! <a href='index.php?page=locations'>Locations</a>";
					}else{
						echo "Oops something went wrong. Please ensure that you filled the form correctly.";
					}
					//$process = $location->()
				}
			break;
			// End locations
			// Vendors
			case array("vendors"):
				$result = $vendor->getall();
				require 'views/vendors/admin.vendors.php';
			break;
			case array("vendor","update",true):
				$result = $vendor->findVendor($id);
				require 'views/vendors/admin.updatevendor.php';
			break;
			case array("vendor","confirmupdate"):
				if(isset($_POST)){
					extract($_POST);
					// print_r($_POST);
					$process = $vendor->update($id,$fullname,$address,$landmark,$phone,$email,$service,$subservice,$location,$description,$status);
					if($process){
						echo "Account Updated Successfully";
					}else{
						echo "Error during account update, please ensure you filled the form correctly";
					}
				}
			break;
			//End Vendors
			// Requests
			case array("requests"):
				$result = $request->getall();
				require 'views/requests/admin.requests.php';
			break;
			case array("request","view",true):
				$result = $request->searchone($id);
				require 'views/requests/admin.requestdetails.php';
			break;
			// End Requests
			case array("logout"):
				session_destroy();
				require 'views/admin.signin.php';
			break;

		}
	}else{
		switch ($param) {
			case array("signup"):
				require 'views/admin.signup.php';
			break;
			case array("signup","process"):
				if(isset($_POST)){
					extract($_POST);
					if($user->newAdmin($name,$username,$password)){
						echo "yay!";
					}else{
						"Oops something went wrong";
					}

				}
				require 'views/admin.signup.php';
			break;
			case array("signin"):
				require 'views/admin.signin.php';
			break;
			case array("signin","process"):
				if(isset($_POST)){
					extract($_POST);
					if($user->adminAuth($username,$password)){
						$_SESSION['admin'] = true;
						if(isset($_SESSION['admin'])){
							require 'views/admin.home.php';
						}else{
							require 'views/admin.signin.php';
						}
					}else{
						echo "nah";
					}
				}
			break;
			default:
				require 'views/admin.signin.php';
			break;
		}
	}

 ?>