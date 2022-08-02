
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

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>initail payment</h2>
			<?php 	
				include_once "../shared/paymentmethod.php";
				$obj = new Payment();

				$bill = $obj->getbill();
				if(count($bill) > 0){
					foreach($bill as $key => $value){
					?>
					<div>
                   </p>
                    <p><?php echo $value['fullname']; ?></p>
                    <p>&#8358
                        <?php echo number_format($value['amount'],2); ?>
                        
                        <form method="post" action="admin/payment.php">
                            <input type="hidden" name="myamount" value="<?php echo $value['amount']; ?>" />
                         
                            <input type="hidden" name="mybilid" value="<?php echo $value['bill_id']; ?>" />
                            <input type="hidden" name="myname" value="<?php echo $value['fullname']; ?>" />
                            
                            <input type="submit" name="btnpay" value="pay" class="btn btn-warning"/> 
                        </form>
                    </p>
                </div>
					<?php	
					}
				}
				?>										
		</div>
	</div>
</div>
<div style="text-align: center;">
			Copyright &copy; <?php echo date('Y'); ?>
			REPAIR IT. All rights reserved.caybaby;
		</div>