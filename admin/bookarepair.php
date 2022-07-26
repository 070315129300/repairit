<?php 	

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		include_once "../shared/dashuser.php";
	$obj = new Dashuser();

	$output = $obj->orde($_POST['fullname'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['city'], $_POST['message1'], $_POST['message2'],);

	if ($output == false) {
		
		$errors = "<div class='alert alert-danger'>please try again later thanks.</div>";
	}else{
		echo "Thanks for contacting us, we will get back to you. ";
	}
}
 ?>	 
	 <div class="container-fluid" >
		<div  class="row">
			<div class="col-md-12">
			<div><h1>Book a repair</h1></div>	
			</div>
			<div class="col-md-12">
				<form method="post" action="" class="form-control form">
					<label>Name </label><br>
					<input type="text" name="fullname" class="form-control form" ><br>
					<label>Email </label><br>
					<input type="text" name="email" class="form-control form"><br>
					<label>Phone Number </label><br>
					<input type="number" name="phone" class="form-control form"><br>
					<label>Street Address </label><br>
					<input type="text" name="address" class="form-control form"><br>
					<label>City </label><br>
					<input type="text" name="city" class="form-control form"><br>
					<textarea class="form-control form" name=message1>Device and model</textarea><br>
					<textarea class="form-control form" name=message2>Fault and complain</textarea><br>
					<button class="btn-outline-warning mb-5">Book a Repair</button>
				</form>
			</div>
		</div>
	</div> -->

</div>