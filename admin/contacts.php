<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Staffs</h2>
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<th>#</th>
					
					<th>full name</th>
					<th>email</th>
					<th>message</th>
					
				</thead>
				<tbody>
					<?php 
					include_once('../shared/dashuser.php');
					$obj = new Dashuser();

					$staff = $obj->contactus();

					if (count($staff) > 0) {
						foreach($staff as $key => $value){
							$contactid = $value['staff_id'];
					?>
					<tr>
						<td>#</td>
						<td><?php echo $value['fullname']; ?></td>
						<td><?php echo $value['email']; ?></td>
						<td><?php echo $value['message']; ?></td>
						
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