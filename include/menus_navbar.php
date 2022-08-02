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
<script type="text/javascript" src='+-jqy/jquery.js'></script>
<!-- <link rel="stylesheet" type="text/css" href="css/styles.css">  
 -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300;400;600;700&family=Playfair+Display:ital@0;1&family=Poppins:ital,wght@0,300;0,400;0,600;1,400&display=swap" rel="stylesheet">
<link type='text/css' rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

 
</head>

<body>
	<!--navbar-->
<?php include_once('css/styles.php'); 
      include_once "./shared/comon.php";
?>

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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color:gold;">
      <span class="navbar-toggler-icon">click</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 10%;">
      <ul class="navbar-nav  mb-1 mb-md-0" >
        <li class="nav-item" >
          <a class="nav-link active hover"  href="index.php">Home</a>
        </li> 
        <li class="nav-item" >
          <a class="nav-link hover" href="Services.php">Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link hover" href="Contact.php">Contacts</a>
        </li>  
        <li class="nav-item ">
          <a class="nav-link hover" href="signup.php">Sign up</a>
        </li> 
        <li class="nav-item ">
            <a class="nav-link disabled hover">blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hover" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">login</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01"  style="background:black;">
              <li class="nav-item"><a class="dropdown-item " style="color: gold; background:black;" href="../repairIt/logout.php" >login</a></li>
              <li class="nav-item"><a class="dropdown-item " style="color: gold; background:black;" href="../repairIt/adminlogout.php">admin</a></li>
            </ul>
          </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="../repairIt/logout.php">log in</a>
        </li>  -->

      </ul>
      
    </div>
  </div>
</nav>
		<!--end of navbar-->
							
				
			 	 
		
		
