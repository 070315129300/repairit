<div class="container-fluid" >
	<div  class="row">
		<div class="col-md-12">
			<h1>payment confirmation</h1>
		</div>
		<div class="col-md-12">
				<?php 
				session_start();
					
				if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btnpay'])) {
				 	 echo "<pre>";
				 	 print_r($_SESSION);
            		 echo "</pre>";
           			 include_once "../shared/paymentmethod.php";

           			 $obj = new Payment();
           			 $myreference = "CH".rand().time();
           			 
           			           // make reference to insertdetails method
            $output = $obj->insertDetails($_SESSION['mycust_id'], $_POST['mybilid'], $_POST['myamount'], $myreference);
        ?>

           		

           		<div>
           			
             
                <p>
                    <?php echo $_POST['myname']; ?>
                    &#8358<?php echo number_format($_POST['myamount'],2); ?>
                </p>
                <p>
                    <form method="post" action="../paystack_init.php">
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
	









