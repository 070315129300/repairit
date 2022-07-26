<?php 
	include "include/menus_navbar.php";
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if(isset($_POST['btnsignup'])){
		// validate inputs

		 if (empty($_POST['firstname'])) {
		 	$errors[] = "firstname field is required";
		}
		// if (empty($_POST['lastname'])) {
		// 	$errors['lastname'] = "lastname field is required";
		// }
		// if (empty($_POST['email'])) {
		// 	$errors['email'] = "email address field is required";
		// }
		// if(empty($_POST['phone'])){
		// 	$errors['phone'] = "phone number field is required";
		// }
		// if(empty($_POST['gender'])){
		// 	$errors['gender'] = "gender number field is required";
		// }
		// if(empty($_POST['password'])){
		// 	$errors['password'] = "password field is required";
		// }elseif(strlen($_POST['password']) <6){
		// 	$errors['password'] = "password must be more than 5 xters";
		// }
		else{ 	
			include_once "shared/customer.php";
			$obj = new Customer();
			$output = $obj->custome($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['phone'], $_POST['gender']);

				if ($output == false) {
			 $errors = "<div class='alert alert-danger'>please try again later thanks.</div>";
					
				}else{
			echo "Thanks for signing up, you can proceed to login. ";
				

				header('Location:login.php');
			}}
			}
			}
		
 ?>

 	<div class="container">
 		<div class="row">
 			<div class="col-md-6">
 				hello
 			</div>
 			<div class="col-md-6">
 				
	<form method="post" action="" class="form-control form">
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
			<input type="text" name="firstname" id="fname"  
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
		<button class="btn btn-outline-warning mb-5 mt-5" id="btnsignup">Sign up</button><br>
		<small>if you have an account please <a href="login.php">login</a><small>
	</form>	
	
 			</div>
 		</div>
 	</div>


<?php 
	include "include/footer.php"
?>
<script type="text/javascript">
		

		$(document).ready(function(){
			// get LGA based on state selected

			$("#state").change(function(){

				var stateid = $(this).val();
			
				//fetch

				$('#lga').load('pload.php',{mystateid: stateid}, function(){
					$('#lga').prop('disabled', false);
				});
			})
		})
	</script>

