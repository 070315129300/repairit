<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Logistics Company</h2>
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<th>#</th>
					<th>staff id</th>
					<th>staff name</th>
					<th>email</th>
					<th>address</th>
					<th>date joined</th>
					
				</thead>
				<tbody>
					<?php 
					include_once('../shared/dashuser.php');
					$obj = new Dashuser();

					$staff = $obj->logistics();

					if (count($staff) > 0) {
						foreach($staff as $key => $value){
							$logid = $value['log_id'];
					?>
					<tr>
						<td>#</td>
						<td><?php echo $value['log_name']; ?></td>
						<td><?php echo $value['log_email']; ?></td>
						<td><?php echo $value['log_address']; ?></td>
						
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