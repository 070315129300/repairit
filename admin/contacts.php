<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>All messages</h2>
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
					$message= $obj->contact();
					if (count($message) > 0) {
						foreach($message as $key => $value){							
					?>
					<tr>
						<td><?php echo $value['contact_id']; ?></td>
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