<?php 

    include_once("include/dashboardnav.php");

  include_once "shared/customer.php";
  $clubobj = new Customer();

  // fetch existing data
  $data = $clubobj->getlog($_REQUEST['logid']);
    echo "<pre>";
  print_r($data);
  echo "</pre>";

  // check if the button is clicked
  if (isset($_POST['btneditclub'])) {
    // validate
    if (empty($_POST['log_name'])) {
      $errors['log_name'] = "log name cannot be empty!";
    }

    if (empty($_POST['log_email'])) {
      $errors['log_email'] = "email established cannot be empty!";
    }

    if (empty($_POST['log_phone'])) {
      $errors['log_phone'] = "phone description cannot be empty!";
    }
    // sanitize
    $logname = sanitizeInput($_POST['log_name']);
    $logemail = sanitizeInput($_POST['log_email']);
    $logphone = sanitizeInput($_POST['log_phone']);
    // Update record
   

    // reference insertclub
    $output = $clubobj->updatelog($logname, $logemail, $logphone);

    // check if it's successful
    if ($output == 1) {
      $msg = "log was successfully updated";

      header("Location: logistics_company.php?m=$msg");
    }elseif($output == 0) {
      $msg = "No changes was made!";
      header("Location: logistics_company.php?m=$msg");
    }else{
      $errors[] = "Oops! Could not update log. ".$output;
    }
  }
?>
<!-- Page Content -->
<div class="container">

<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">
  <small>Edit Logistics</small>
</h1>

<div class="row">
  <div class="col-lg-8 mb-4">
    <?php 
      if (!empty($errors)) {
        echo "<ul class='alert alert-dark'>";
        foreach ($errors as $key => $value) {
          echo "<li>$value</li>";
        }
        echo "</ul>";
      }
    ?>
    <form name="addclub" id="addclub" action="editclub.php?clubid=<?php if(isset($_REQUEST['log_id'])){ echo $_REQUEST['log_id']; } ?>" method="post" enctype="multipart/form-data">
      <div class="control-group form-group">
        <div class="controls">
          <label>Club Name:</label>
          <input type="text" class="form-control" id="clubname" name='log_name' value="<?php if(isset($data['log_name'])){ echo $data['log_name']; } ?>">
        
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Email:</label>
          <input type="text" class="form-control" id="clubname" name='log_email' value="<?php if(isset($data['log_email'])){ echo $data['log_email']; } ?>">
        
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Phone:</label>
          <input type="text" class="form-control" id="clubname" name='log_phone' value="<?php if(isset($data['log_phone'])){ echo $data['log_phone']; } ?>">
        
        </div>
      </div>
 
      <input type="hidden" name="logid" value="<?php if(isset($data['log_id'])){ echo $data['log_id']; } ?>">
      <input type="submit" class="btn btn-primary" id="btneditclub" name="btneditclub" value="Update Log">
    </form>
  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

