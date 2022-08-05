
 <div class="container-fluid" >
		<div  class="row">
			<div class="col-md-12">
			<div><h3>track order</h3></div>	
        <table class="table table-bordered table-striped table-hover">
        <thead>
          
          <th>order details id</th>
          <th>customer id</th>
          <th>fullname</th>
          <th>address</th>
          <th>city</th>
          <th>Device model</th>
          <th>Device fault</th> 
          
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
            <td><?php echo $value['order_details_id']; ?></td>
            <td><?php echo $value['customer_email']; ?></td>
            <td><?php echo $value['fullname']; ?></td>
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
				<!--end-->
	