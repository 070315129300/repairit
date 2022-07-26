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