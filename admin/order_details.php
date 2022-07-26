	 <div class="container-fluid" >
		<div  class="row">
			<div class="col-md-12">
			<div><h1>Order details</h1></div>	
			</div>
			<div class="offset-md-12">		
				<table class="table table-bordered table-striped table-hover">
				<thead>
					<th>#</th>
					<th>order details id</th>
					<th>customer id</th>
					<th>Device model</th>
					<th>Device fault</th>	
					<th></th>
					<th>image </th>					
				</thead>
				<tbody>
					<?php 
					include_once('../shared/dashuser.php');
					$obj = new Dashuser();
					$message= $obj->orderdetails();
					if (count($message) > 0) {
						foreach($message as $key => $value){							
					?>
					<tr>
						<td><?php echo $value['order_details_id']; ?></td>
						<td><?php echo $value['customer_id']; ?></td>
						<td><?php echo $value['device_model']; ?></td>
						<td><?php echo $value['device_fault']; ?></td>
						<td><?php echo $value['image_url']; ?></td>	
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
			</div>
		</div>
	</div> 

</div>