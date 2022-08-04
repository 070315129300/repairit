<?php     include_once "include/custdashboardnav.php";  ?>
<div class="container">
     <div class="row">
         <div class="col-lg-8 mb-4">
            <h2>Payment Status</h2>
            <?php 
            if (isset($_REQUEST['ref'])) {
            ?>
            <div class="alert alert-danger">
            <h3>Payment failed</h3>
            <p>Your payment with reference number <b><?php echo $_REQUEST['ref']; ?></b> was not successful.</p>
        </div>
             <?php
              }
             ?>
        </div>

    </div>
</div>
