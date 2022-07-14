
<?php 
	include "include/menus_navbar.php";
?>
		<?php  
			
//check if the button is click
               

            if(isset($_POST['btnsend'])){
                //validate
                if(empty($_POST['firstname'])){
                $errors['firstname'] = "first name can't be empty";
                }
                 if(empty($_POST['lastname'])){
                $errors['lastname'] = "last name can't be empty";
                }
                if(empty($_POST['email'])){
                $errors['email'] = "email can't be empty";
                }
                if(empty($_POST['password'])){
                $errors['password'] = "password can't be empty";
                }elseif(strlen($_POST['password']) <6){
					$errors['password'] = "password must be more than 5 charaters";
				}
                if(empty($_POST['gender'])){
                $errors['gender'] = "gender can't be empty";
                }
                if(empty($_POST['phone'])){
                $errors['phone'] = "phone can't be empty";
                }

				 if(empty($errors)){ 
                //sanitize
                include_once('shared/comon.php');

                $objcust = new sanitize;
                $firstname = $objcust->sanitizeInput($_POST['firstname']);

                $lastname = $objcust->sanitizeInput($_POST['lastname']);
               $email = $objcust->sanitizeInput($_POST['email']);
                $phone = $objcust->sanitizeInput($_POST['phone']);
				$password = $_POST['password'];
				$gender = $_POST['gender'];

           
				include_once("shared/customer.php");
				$objcust = new customer();
						//start inspection

						//end inspection
				$output = $objcust->insertcustomer($firstname, $lastname, $email, $password, $phone, $gender);
				 if($output == true){
                    header('Location:login.php');
                }else{
                    die('something went wrong pls try again later');
                }
			}
		}
		
		?>

	<div class="container-fluid" >
		<div  class="row">
			<div class="col-md-12">
			<div id="book_a"></div>	
			</div>
				<div class="col-md-6">
				<?php
				if (!empty($errors)) {
						echo "<ul class='alert alert-danger'>";
						foreach ($errors as $key => $value) {
							echo "<li>$value</li>";
						}
						echo "</ul>";
					
					}

					?>

				<form method="post" action="" class="form-control form">
					<h1 id="conct">Sign up</h1>
					<label>First Name *</label><br>
					<input type="text" name="firstname" id="fname" class="form-control form" required><br>
					<label>Last Name *</label><br>
					<input type="text" name="lastname" id="lname" class="form-control form" required><br>
					<label>Email *</label><br>
					<input type="email" name="email" id="mail" class="form-control form" required><br>
					<label>Password *</label><br>
					<input type="password" name="password" id="pass" class="form-control form" required><br>
					<label>Phone Number *</label><br>
					<input type="number" name="phone" id="num" class="form-control form" required><br>
					<input type="radio" name="gender" value="male"><span>Male</span>
					<input type="radio" name="gender" value="male"><span>Female</span><br>
					<button class="btn-outline-warning mb-5 mt-5" onclick="btnsign()">Sign up</button>
				</form>
			</div>
		</div>
	</div>
	<!--JS script-->
	<script type="text/javascript">
	/*		function btnsign(){ 
		var email = document.getElementById('mail').value
		var pwd = document.getElementById('pass').value
		var firstn = document.getElementById('fname').value
		var lastn = document.getElementById('lname').value
		var num = document.getElementById('num').value
		
			if(email=='' || pwd=='' || firstn=='' || lastn=='' || num==''){
				alert('please fill all field');
			}else{
				//alert('Registration Successful');
			}	
}*/
</script>
<!--footer-->
<?php 
	include "include/footer.php"
?>
