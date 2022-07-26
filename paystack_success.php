<div class="container">
<h2>Payment Status</h2>
    <div class="row">
     <div class="col-lg-8">
        <?php 
            if (isset($_REQUEST['ref'])) {
        ?>
            <div class="alert alert-success">
             <p>Your payment with reference number <b><?php echo $_REQUEST['ref']; ?></b> was successful.</p>
            </div>
        <?php
        }
        ?>
  </div>
</div>
</div>
