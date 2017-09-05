<?php 
	session_start();
	//This file holds all the configurations
	define('APP_NAME','RISHIWORKER');
	define('APP_SLOGAN', 'Every gets to Work');
	define('APP_ROOT',$_SERVER['DOCUMENT_ROOT'].'/mvps/rishiworker');
	define('APP_URL','http://localhost:88/mvps/rishiworker/');

	define('MODELS', APP_ROOT.'/models/');
	define('SCRIPTS',APP_ROOT.'/scripts/');
	define('PHP_SCRIPTS',SCRIPTS.'php/');
    define('JS_SCRIPTS',SCRIPTS.'js/');
	// define('MODEL','models/');
	// define('INC','includes/');

	// require 'inc.objects.php';
	require 'inc.autoloader.php';
	$autoloader = new AutoLoader();
	//$autoloader->loadModels(MODEL, '');

 ?>