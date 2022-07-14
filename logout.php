<?php 
    include_once("shared/Customer.php");

    // create object of user
    $obj = new Customer();

    // make reference to login
    $obj->logout();
?>