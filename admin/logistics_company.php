<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Logistics Company</h2>
			<button class="btn btn-warning mb-3 mt-2"><a href="add_log.php">Add log</a></button>
			<table class="table table-bordered table-striped table-hover">
				<thead>
					
					<th>Logistics id</th>
					<th>Logistics name</th>
					<th>Email</th>
					<th>phone</th>
					<th>Date joined</th>
					
				</thead>
				<tbody>
					<?php 
					include_once('../shared/dashuser.php');
					$obj = new Dashuser();

					$staff = $obj->logistics();

					if (count($staff) > 0) {
						foreach($staff as $key => $value){
					?>
					<tr>
						<td><?php echo $value['log_id']; ?></td>
						<td><?php echo $value['log_name']; ?></td>
						<td><?php echo $value['log_email']; ?></td>
						<td><?php echo $value['log_phone']; ?></td>
						
						 <td><?php echo $value['date_joined']; ?></td>
						 <td><a href="edit_log.php">Edit</a></td>
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