<?php 
	include "include/menus_navbar.php";
?>

<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	

	//check if sign up button is clicked
	if(isset($_POST['btnsignup'])){
		// validate inputs
		if (empty($_POST['firstname'])) {
			$errors['firstname'] = "firstname field is required";
		}
		if (empty($_POST['lastname'])) {
			$errors['lastname'] = "lastname field is required";
		}
		if (empty($_POST['email'])) {
			$errors['email'] = "email address field is required";
		}
		if(empty($_POST['phone'])){
			$errors['phone'] = "phone number field is required";
		}
		if(empty($_POST['gender'])){
			$errors['gender'] = "gender number field is required";
		}
		if(empty($_POST['password'])){
			$errors['password'] = "password field is required";
		}elseif(strlen($_POST['password']) <6){
			$errors['password'] = "password must be more than 5 xters";
		}

		if (empty($errors)) {
			//sanitize inputs

			include_once "shared/comon.php";
			$cmobj = new sanitize;

			// make use of sanitizeinput method
			$firstname =$cmobj->sanitizeInput($_POST['firstname']);
			$lastname =$cmobj->sanitizeInput($_POST['lastname']);
			$email =$cmobj->sanitizeInput($_POST['email']);
			$phone =$cmobj->sanitizeInput($_POST['phone']);
			$gender= $_POST['gender'];
			$password= $_POST['password'];

			//create object and pass parameter

			include_once "shared/customer.php";
			
			$custobj = new Customer();

			//store what it return in output varriable

			$output = $custobj->insertcustomer($firstname, $lastname, $email, $phone, $password, $gender);

			if ($output ==true) {
				header('Location:login.php');
			}else{
				$errors[] = "Oops! something happened. Try again later.";
			}

		}
		}
	}
 ?>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<div>
	<form method="post" action="" class="form-control form">
	<h4 id="conct">Sign Up</h4>

	<?php  
		if (isset($errors) && is_array($errors)) {
		echo "<ul class='alert alert-danger'>";
		foreach ($errors as $key => $value) {
		echo "<li>$value</li>";
		}
		echo "</ul>";
		}
	?>

		<label>First Name *</label><br>
			<input type="text" name="firstname" id="fname"  
			value="<?php if(isset($_POST['firstname'])){ echo $_POST['firstname']; } ?>" class="form-control"><br>
		<label>Last Name *</label><br>
			<input type="text" name="lastname" id="lname"  
			value="<?php if(isset($_POST['lastname'])){
				echo $_POST['lastname'];
			} ?>" class="form-control"><br>
		<label>Email *</label><br>
			<input type="text" name="email" id="mail"  
			value="<?php if(isset($_POST['email'])){
				echo $_POST['email'];
			} ?>" class="form-control"><br>
		<label>Password *</label><br>
			<input type="password" name="password" id="pass" 
			  class="form-control"><br>
		<label>Phone Number *</label><br>
			<input type="number" name="phone" id="num" 
			value="<?php if(isset($_POST['phone'])){
				echo $_POST['phone'];
			} ?>" class="form-control"><br>
		<label for="state">State</label><br>
			<select for="state" id="state" class="form-control">
				<option value="">please select</option>
			</select>
		<label for="lga">LGA</label>
			<select name="lga" id="lga" disabled class="form-control">
				<option value="">select lga</option>	
			</select>
		<label>Gender</label><br><br>
		<input type="radio" name="gender" value="male"><span>Male</span><br>
		<input type="radio" name="gender" value="female"><span>Female</span><br>
		<button class="btn btn-outline-warning mb-5 mt-5" id="btnsignup" onclick="btnsign()">Sign up</button><br>
		<small>if you have an account please <a href="login.php">login</a><small>
	</form>	
	</div>
 			</div>
 		</div>
 	</div>


<?php 
	include "include/footer.php"
?>