<?php 
  session_start();
  
?>
<?php 
  include_once('include/dashboardnav.php');
?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
              </button>
            </div>
          </div>

      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div id="ajaxload"></div>
          </div>
        </div>
      </div>    

         <script type="text/javascript" src="jqy/jquery.js"></script>
         <script type="text/javascript">
           $(document).ready(function(){
            $('#order').click(function(){
              $('#ajaxload').load('admin/order.php');
            })
            $('#staff').click(function(){
              $('#ajaxload').load('admin/staff.php')
            })
            $('#bill').click(function(){
              $('#ajaxload').load('admin/bill.php')
            })
            $('#payment').click(function(){
              $('#ajaxload').load('admin/payment.php')
            })
            $('#orderd').click(function(){
              $('#ajaxload').load('admin/order_details.php')
            })
            $('#pick').click(function(){
              $('#ajaxload').load('admin/logistics_pickup.php')
            })
            $('#delivery').click(function(){
              $('#ajaxload').load('admin/logistics_delivery.php')
            })
            $('#device').click(function(){
              $('#ajaxload').load('admin/device.php')
            })
            $('#customer').click(function(){
              $('#ajaxload').load('admin/customer.php')
            })
            $('#logistics').click(function(){
              $('#ajaxload').load('admin/logistics_company.php')
            })
             $('#dash').click(function(){
              $('#ajaxload').load('admin/categories.php')
            })
           });


         </script>
       <?php 
       include_once('include/dashboardjs.php')
       ?>
 


	
<!--footer-->

 <div style="text-align: center;">
			Copyright &copy; <?php echo date('Y'); ?>
			REPAIR IT. All rights reserved.caybaby;
		</div>
