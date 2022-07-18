<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Customer</h2>
			<table class="table table-bordered table-striped table-hover">
				<thead>
					
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

					$cust = $obj->customer();

					 echo "<pre>";
                 print_r($cust);
                echo "</pre>";

					if (count($cust) > 0) {
						foreach($cust as $key => $value){
							
					?>
					<tr>
						<td><?php echo $value['customer_id'];?></td>
						
						<td><?php echo $value['firstname'];?></td>
						<td><?php echo $value['lastname'];?></td>
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