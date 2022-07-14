<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Customer</h2>
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<th>#</th>
					<th>customer id</th>
					<th>first name</th>
					<th>last name</th>
					<th>email</th>
					<th>phone</th>
					<th>address</th>
					<th>gender</th>
					<th>date joined</th>
				</thead>
				<tbody>
					<?php 
					include_once('../shared/dashuser.php');
					$obj = new Dashuser();

					$staff = $obj->staff();

					if (count($staff) > 0) {
						foreach($staff as $key => $value){
							$customerid = $value['customer_id'];
					?>
					<tr>
						<td>#</td>
						<td><?php echo $value['firstname']; ?></td>
						<td><?php echo $value['lastname']; ?></td>
						<td><?php echo $value['email']; ?></td>
						<td><?php echo $value['phone'];?></td>
						<td><?php echo $value['address'];?></td>
						<td><?php echo $value['gender'];?></td>
						<td><?php echo $value['date_joined']; ?></td>
						<td><a href="">Edit</a>| <a href="">Delete</a></td>
					</tr>
					<?php
						}
					}
					?>
					 
				</tbody>
				
			</table>
		</div>
	</div>
</div>