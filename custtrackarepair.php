<?php 
  include_once('include/custdashboardnav.php');
?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">                
                <button type="button" class="btn btn-sm btn-outline-warning"><?php  
                if (isset($_SESSION['firstname'])) {
                   echo $_SESSION['firstname']." ".$_SESSION['lastname'];
                }?>
                </button>               
              </div>
            </div>
          </div>
 <div class="container-fluid" >
		<div  class="row">
			<div class="col-md-12">
			<div><h3>track order</h3></div>	
        <table class="table table-bordered table-striped table-hover">
        <thead>
          <th>#</th>
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
          include_once('shared/dashuser.php');
          $obj = new Dashuser();
          $message= $obj->orderdetails();
          if (count($message) > 0) {
            foreach($message as $key => $value){              
          ?>
          <tr>
            <td><?php echo $value['order_details_id']; ?></td>
            <td><?php echo $value['customer_id']; ?></td>
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
<div style="text-align: center;">
			Copyright &copy; <?php echo date('Y'); ?>
			REPAIR IT. All rights reserved.caybaby;
		</div>