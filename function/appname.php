<?php 
		// write a function to display app name
	function getAppName(){
		//check if app_name is already define
		if(!defined('APP_NAME')){
			define('APP_NAME', 'REPAIR_IT');
		}
		echo APP_NAME;
	}
	?>
