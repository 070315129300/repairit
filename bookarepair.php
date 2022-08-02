<?php ob_start() ?>
<?php 
  include_once('include/custdashboardnav.php');
?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                 
                <button type="button" class="btn btn-sm btn-outline-warning"><?php  
                if (isset($_SESSION['firstname'])) {
                   echo $_SESSION['firstname']." ".$_SESSION['lastname'];
                }
            ?></button>
                
              </div>
               
           
            </div>
          </div>

 <?php  
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['btnsignup'])){
      if(empty($_POST['fullname']) || empty($_POST['address']) || empty($_POST['city']) || empty($_POST['devicemodel']) || empty($_POST['fault'])){
        $errors[] = "please fill all field";
      }else{
        include_once "shared/customer.php";
        $obj = new Customer();
        $output = $obj->order($_POST['fullname'], $_POST['address'], $_POST['city'], $_POST['devicemodel'], $_POST['fault']);
          if ($output == false) {
    $errors[] = "<div class='alert alert-danger'>please try again later thanks.</div>";
  }else{
    $errors[] = "<div class='alert alert-success'>your order was successfull.</div>";

   }


      }
    }
  }
  ?>

  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-6 col-md-12 mt-5">
        <img src="images/signup.png" class="mt-5 img-fluid">
      </div>
      <div class="col-lg-6 col-md-7">
        
  <form method="POST" action="" class="form-control form">
  <h4 id="conct">book a repair</h4>

  <?php  
               
      if (!empty($errors)) {
        echo "<ul class='alert alert-dark'>";
        foreach ($errors as $key => $value) {
          echo "<li>$value</li>";
        }
        echo "</ul>";
      }
  ?>

  <label>Name </label><br>
          <input type="text" name="fullname" class="form-control form" ><br>
          <label>Street Address </label><br>
          <input type="text" name="address" class="form-control form"><br>
          <label>City </label><br>
          <input type="text" name="city" class="form-control form"><br>
          <textarea class="form-control form" name="devicemodel">Device and model</textarea><br>
          <textarea class="form-control form" name="fault">Fault and complain</textarea><br>
    <button class="btn btn-outline-warning mb-5 mt-5" name="btnsignup">Sign up</button>
    
  </form> 
  
      </div>
    </div>
  </div>





<div style="text-align: center;">
			Copyright &copy; <?php echo date('Y'); ?>
			REPAIR IT. All rights reserved.caybaby;
		</div>
    <?php ob_end_flush(); ?>