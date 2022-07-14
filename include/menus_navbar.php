<!DOCTYPE html>
<html>
<head>
	<?php 
	//include "function/appname.php"
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta Name="Description" content="">
	<meta Name="keyword" content="">
	<meta Name="Author" content="">
	<title>Repair It</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	 <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script> 
<script type="text/javascript" src='jqy/jquery.js'></script>
<!-- <link rel="stylesheet" type="text/css" href="css/styles.css">  
 --></head>

<body>
	<!--navbar-->
<?php include_once('css/styles.php'); ?>
<?php 
    // write a function to display app name
  function getAppName(){
    //check if app_name is already define
    if(!defined('APP_NAME')){
      define('APP_NAME', 'REPAIR_IT');
    }
 }
  ?>
	<!--Navbar-->
		<nav class="navbar navbar-expand-lg "style="background: black;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">REPAIR_IT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 40%;">
      <ul class="navbar-nav  mb-1 mb-lg-0" >
        <li class="nav-item" >
          <a class="nav-link active"  href="index.php">Home</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="Services.php">Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contacts</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Sign up</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="login.php">log in</a>
        </li> 

      </ul>
      
    </div>
  </div>
</nav>
		<!--end of navbar-->
							
				
			 	 
		
		
