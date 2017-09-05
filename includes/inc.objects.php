<?php 
	include 'inc.config.php';
	//trying to use the autoloader
	spl_autoload_register(function($class_name){
		 include MODELS.'class.'.$class_name.'.php';
	});	
	$db = new database();
	$con = $db->connect();
	$user = new user($con);
	$service = new service($con);
	$subservice = new subservice($con);
	$location = new location($con);
	$vendor = new vendor($con);
	$request = new request($con); 
	// $user = new User();
	// $search = new Search();
 ?>