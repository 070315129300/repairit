
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
                }
            ?></button>    
              </div>
            </div>
          </div>
<div class="container-fluid" >
	<div  class="row">
		<div class="col-md-12">
			<h1>bill Confirmation</h1>
		</div>
		<div class="col-md-12">
				<?php 
				if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btnpay'])) {
				 	 echo "<pre>";
				 	 print_r($_SESSION);
            		 echo "</pre>";
           			 include_once "shared/paymentmethod.php";

           			 $obj = new Payment();
           			 $myreference = "CH".rand().time();
           			 
           			           // make reference to insertdetails method
            $output = $obj->insertDetails($_SESSION['mycust_id'], $_POST['mybilid'], $_POST['myamount'], $myreference);
        ?>
              <div>
                <p>
                  <?php  
                if (isset($_SESSION['firstname'])) {
                   echo $_SESSION['firstname']." ".$_SESSION['lastname'];
                }
            ?>
                    <?php echo $_POST['myname']; ?>
                    &#8358<?php echo number_format($_POST['myamount'],2); ?>
                </p>
                <p>
                    <form method="post" action="paystack_init.php">
                      
                        <input type="hidden" name="email" value="<?php echo $_SESSION['myemail']; ?>" />
                        <input type="hidden" name="amount" value="<?php echo $_POST['myamount']; ?>" />
                        <input type="hidden" name="myreference" value="<?php echo $myreference; ?>" />
                        <input type="submit" name="btnpay" value="Pay With Paystack" class="btn btn-success" />
                    </form>
                </p>
            </div>
				<?php } ?>
		</div>		
	</div>
</div>
<div style="text-align: center;">
			Copyright &copy; <?php echo date('Y'); ?>
			REPAIR IT. All rights reserved.caybaby;
		</div>










