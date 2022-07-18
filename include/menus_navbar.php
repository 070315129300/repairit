<?php ob_start() ?>

<!DOCTYPE html>
<html>
<head>

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
 -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300;400;600;700&family=Playfair+Display:ital@0;1&family=Poppins:ital,wght@0,300;0,400;0,600;1,400&display=swap" rel="stylesheet">
 
</head>

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
    <a class="navbar-brand" href="index.php"><span style="color:gold">REPAIR</span><span style="color:white">IT</span></a>
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
          <a class="nav-link" href="../repairIt/logout.php">log in</a>
        </li> 

      </ul>
      
    </div>
  </div>
</nav>
		<!--end of navbar-->
							
				
			 	 
		
		
