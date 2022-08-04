<?php ob_start() ?>
<?php 
  include_once('include/dashboardnav.php');
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
      if(empty($_POST['log_name']) || empty($_POST['log_email']) || empty($_POST['log_phone'])){
        $errors[] = "please fill all field";
      }else{
        include_once "shared/customer.php";
        $obj = new Customer();
        $output = $obj->log($_POST['log_name'], $_POST['log_email'], $_POST['log_phone'],);
          if ($output == false) {
    $errors[] = "<div class='alert alert-danger'>please try again later thanks.</div>";
  }else{
    $errors[] = "<div class='alert alert-success'>logistics company was successfully added.</div>";

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
  <h4 id="conct">Add Logisticis</h4>

  <?php  
               
      if (!empty($errors)) {
        echo "<ul class='alert alert-danger'>";
        foreach ($errors as $key => $value) {
          echo "<li>$value</li>";
        }
        echo "</ul>";
      }
          
  ?>
    <label>Logistics name *</label><br>
      <input type="text" name="log_name"  
      value="" class="form-control form"><br>
    <label>Email *</label><br>
      <input type="text" name="log_email" id="mail"  
      value="" class="form-control form"><br>
    <label>Phone Number *</label><br>
      <input type="number" name="log_phone" id="num" 
      value="" class="form-control form"><br>
    <button class="btn btn-outline-warning mb-5 mt-5" name="btnsignup">Add log</button><br>
  </form> 
  
      </div>
    </div>
  </div>




