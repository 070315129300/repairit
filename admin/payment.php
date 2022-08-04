<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Staffs</h2>
			<table class="table table-bordered table-striped table-hover"
			width="100%"; line-height="40px;" align="center">
				<thead>
					<th>payment id</th>
					<th>user id</th>
					<th>product id</th>
					<th>date paid</th>
					<th>amount</th>
					<th>payment status</th>
					<th>payment mode</th>
					<th>payment reference</th>
					<th>created at</th>
					<th>updated at</th>
				</thead>
				<tbody>
					<?php 
					include_once "../shared/dashuser.php";
					$obj = new Dashuser();

					$staff = $obj->paymentmade();



					if (count($staff) > 0) {
						foreach($staff as $key => $value){
							
					?>
					<tr>
						<td><?php echo $value['payment_id']; ?></td>
						<td><?php echo $value['user_id']; ?></td>
						<td><?php echo $value['product_id']; ?></td>
						<td><?php echo $value['datepaid']; ?></td>
						<td><?php echo $value['amount'];?></td>
						<td><?php echo $value['paymentstatus'];?></td>
						<td><?php echo $value['paymentmode'];?></td>
						 <td><?php echo $value['reference']; ?></td>
						 <td><?php echo $value['created_at']; ?></td>
						 <td><?php echo $value['update_at']; ?></td>
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
	









