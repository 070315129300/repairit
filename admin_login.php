<?php 
session_start();
include_once("include/menus_navbar.php");
  //check if the user click on login button

if ($_SERVER['REQUEST_METHOD']=="POST"){
  include_once("shared/customer.php");

  //create object of user's class
$custobj =new Customer();

  $output = $custobj->login($_POST['eemail'], $_POST['epassword']);

  if($output == false){
    $error= "<div class='alert alert-danger'>invaild username or password</div>";
  }else{

   
    header("location:dashboard.php");
    exit();
  }
}
?>
  <div class="container" style="height:500px">
    <!-- Page Heading/Breadcrumbs -->
    
     <?php  
              if(isset($error)){
        echo ($error);
    }

          ?>

          <?php 
            if(isset($_GET['m'])){
              echo "<div class='alert alert-danger'>".$_GET['m']."</div>";
            
          ?>

          <script type="text/javascript">
            alert('<?php echo $_GET['m']?>');

          </script>
        <?php } ?>

    <div class="row">

      <div class="col-lg-8">
       
         <form action="" method="post" class="fom">
          <h1>
      Admin Login
    </h1>
  <div>
    <label for="eemail">Email</label>
    <input type="email" name='eemail' class="form-control form" id="eemail" required>
     
  </div>
  <div>
    <label for="ePassword">Password</label>
    <input type="password" name='epassword' class="form-control form" id="ePassword" required >
  </div>
  
  <button type="submit" class="btn btn-dark mt-5" onclick="press()">Login</button>
</form>
      </div>  
    </div> 
  </div>
<!--js validation-->
<script type="text/javascript">
      function press(){ 
    var name = document.getElementById('eemail').value
    var password = document.getElementById('epassword').value
    if(eemail=='' || epassword==''){
        alert('validation error');
      }
      else{
        alert('login Successful');
      } 
}
</script>
  <!-- /.container -->
  <?php 
include_once("include/footer.php");
?>