<?php 
	include "include/menus_navbar.php";
 ?>

 <?php 	
 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
 		if(isset($_POST['btnsignup'])){
 			if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password']) ){
 				$errors[] = "please fill all field";
 			}else{
 				include_once "shared/customer.php";
 				$obj = new Customer();
 				$output = $obj->custome($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['gender'], $_POST['phone']);
 					if ($output == false) {
		$errors[] = "<div class='alert alert-danger'>please try again later thanks.</div>";
	}else{
		header('Location:login.php');

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
 			<div class="col-lg-6 col-md-7" style="padding: 50px;">
 				
	<form method="POST" action="" class="form-control form">
	<h4 id="conct">Sign Up</h4>

	<?php  
					     
      if (!empty($errors)) {
        echo "<ul class='alert alert-danger'>";
        foreach ($errors as $key => $value) {
          echo "<li>$value</li>";
        }
        echo "</ul>";
      }
	?>
		<label>First Name *</label><br>
			<input type="text" name="firstname"  
			value="" class="form-control form"><br>
		<label>Last Name *</label><br>
			<input type="text" name="lastname" id="lname"  
			value="" class="form-control form"><br>
		<label>Email *</label><br>
			<input type="text" name="email" id="mail"  
			value="" class="form-control form"><br>
		<label>Password *</label><br>
			<input type="password" name="password" id="pass" 
			  class="form-control form"><br>
		<label>Phone Number *</label><br>
			<input type="number" name="phone" id="num" 
			value="" class="form-control form"><br>

		<label>Gender</label>
		<input type="radio" name="gender" value="male"><span>Male</span>
		<input type="radio" name="gender" value="female"><span>Female</span><br>
		<button class="btn btn-outline-warning mb-3 mt-1" name="btnsignup">Sign up</button><br>
		<small>if you have an account please <a href="login.php">login</a><small>
	</form>	
	
 			</div>
 		</div>
 	</div>


<?php 
	include "include/footer.php"
?>


