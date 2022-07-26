	 <div class="container-fluid" >
		<div  class="row">
			<div class="col-md-12">
			<div><h1>Order made</h1></div>	
			</div>
			<div class="col-md-12">
				<table class="table table-bordered table-striped table-hover">
				<thead>
					<th>#</th>
					<th>Fullname</th>
					<th>Email</th>
					<th>Phone number</th>
					<th>Address</th>
					<th>City</th>
					<th>Device Model</th>
					<th>Fault Complain</th>					
				</thead>
				<tbody>
					<?php 
					include_once('../shared/dashuser.php');
					$obj = new Dashuser();
					$message= $obj->ordermade();
					if (count($message) > 0) {
						foreach($message as $key => $value){							
					?>
					<tr>
						<td><?php echo $value['order_id']; ?></td>
						<td><?php echo $value['fullname']; ?></td>
						<td><?php echo $value['email']; ?></td>
						<td><?php echo $value['phone']; ?></td>
						<td><?php echo $value['address']; ?></td>
						<td><?php echo $value['city']; ?></td>
						<td><?php echo $value['devicemodel']; ?></td>
						<td><?php echo $value['fault']; ?></td>
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
</div>