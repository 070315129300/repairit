<?php     include_once "include/custdashboardnav.php";  ?>
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
