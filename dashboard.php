
<?php 
  include_once('include/dashboardnav.php');
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
                }
            ?></button>
                
              </div>
               
           
            </div>
          </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="ajaxload">
              
    <link type='text/css' rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <div class="container" style='min-height:700px'>

           <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-5" style="height:200px;">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-users" style='font-size:24px'></i>
                </div>
                <div class="mr-5">Book a repair</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="">
                <span class="float-left" style="color:gold;">Track a repair</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-5" style="height:200px;">
            <div class="card text-white bg-dark o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-list"></i>
                </div>
                <div class="mr-5">Payment</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="">
                <span class="float-left" style="color:gold;">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-5" style="height:200px;">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-comment"></i>
                </div>
                <div class="mr-5">12 Message</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="">
                <span class="float-left" style="color:gold;">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-5" style="height:200px;">
            <div class="card text-white bg-secondary o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa  fa-ban"></i>
                </div>
                <div class="mr-5">13 number Transactions!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="">
                <span class="float-left" style="color:gold;">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-sm-6 mb-3 my-5" style="height:200px;">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa  fa-ban"></i>
                </div>
                <div class="mr-5">13 pending issues!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="">
                <span class="float-left" style="color:gold;">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

  </div>


         <script type="text/javascript" src="jqy/jquery.js"></script>
         <script type="text/javascript">
           $(document).ready(function(){
            $('#book').click(function(){
              $('#ajaxload').load('admin/order.php');
            })
            $('#track').click(function(){
              $('#ajaxload').load('admin/trackarepair.php')
            })
            $('#staff').click(function(){
              $('#ajaxload').load('admin/staff.php')
            })
            $('#contactus').click(function(){
              $('#ajaxload').load('admin/contacts.php')
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
            $('#pickup').click(function(){
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
               $('#addlog').click(function(){
              $('#ajaxload').load('admin/add_log.php')
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
