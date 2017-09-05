<?php 
	//This module is supposed to autoload all files a directory
	class AutoLoader{
		
		public function loadModels($path,$step=""){
			// instantiate an array to hold the files
			$dirFiles =array();
			//check if the path is a directory
			if(is_dir($path)){
				//open directory
				if($dir = opendir($path)){
					while(($file = readdir($dir)) !== false){
						if("." != $file && ".." != $file){
							$dirFiles[] = $file;
						}
					}
				}
				closedir($dir);
				sort($dirFiles);

			}else{
				echo "Directory ".path."does not exist!";
			}
		}
	}

 ?>