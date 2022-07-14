
<?php 
	include "include/menus_navbar.php";
?>

<?php 	

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		include_once "shared/customer.php";
	$obj = new Customer();

	$output = $obj->contactus($_POST['fullname'], $_POST['email'], $_POST['message']);

	if ($output == false) {
		$errors = "<div class='alert alert-danger'>please try again later thanks.</div>";
	}else{
		echo "Thanks for contacting us, we will get back to you. ";
	}
}
 ?>



	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div id="contacts"><h1 id=conct>contacts</h1></div>
				
			</div>
		</div>
		<div class="row mt-5 mt-5">
			<div class="col-md-5" style="margin-left: 8%;">
				<h5>Customer Support</h5>
				<p class="contact">Have a question? Need some<br> help? Get in touch with us.</p>

				<span class="contact">+234 703 151 2930<br>
 				Repairit@support.com<br>
				Hours Of Operation:<br>
				Mon – Fri: 9:00 a.m. to 8:00 p.m.<br>
				Sat & Sun: 10:00 a.m. to 6:00 p.m</span>
			</div>
			<div class="col-md-5">
				<form class="form-control form" method="post" action="">
					<label>Name</label>
					<input type="text" class="form-control form" name="fullname"><br>
					<label>Email</label>
					<input type="email" name="email" 
					class="form-control form"><br>
					<label>Message</label><br>
					<textarea  class="form-control form" name="Message"></textarea>
					<button class="btn btn-warning mt-3 mb-5">Submit</button>
					

				</form>
			</div>
		</div>
	</div>


<!--footer-->
<?php 
	include "include/footer.php"
?>

