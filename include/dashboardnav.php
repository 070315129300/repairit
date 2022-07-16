<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta Name="Description" content="">
	<meta Name="keyword" content="">
	<meta Name="Author" content="">
	<title>Repair It</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src='jqy/jquery.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
   <link rel="stylesheet" type="text/css" href="dashbordCss.css">
</head>
<body >
   <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

    </style>


    <!-- Custom styles for this template -->
    <link href="dashbord.css" rel="stylesheet">
  </head>

  <body>
    <?php 
        // start session
        session_start();

        if (!isset($_SESSION['letmein']) && $_SESSION['letmein']!='cayleb') {
          // redirect to login
          //$msg = "<script>alert('You need to login to access this page!')</script>";
          $msg = "You need to login to access this page!";
          
          header("Location: login.php?m=$msg");
          exit();
        }

        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";

        // sanitize function
        function sanitizeInput($data){
          $data = trim($data);
          $data = htmlspecialchars($data);
          $data = addslashes($data);

          return $data;
        }
    ?>
    

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">REPAIR_IT</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
        aria-label="Search">       
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="../repairIt/logout.php">Sign out</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item" >
                <a class="nav-link active" id="dash" >
                  <span data-feather="home" class="align-text-bottom"></span>
                  Dashboard

                </a>
              </li>
              <li class="nav-item" id="order">
                <a class="nav-link">
                  <span data-feather="file" class="align-text-bottom"></span>
                  Orders
                </a>

              </li>
              <li class="nav-item">
                <a class="nav-link" id="device">
                  <span data-feather="shopping-cart" class="align-text-bottom"></span>
                  Device
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="customer">
                  <span data-feather="users" class="align-text-bottom"></span>
                  Customer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="orderd">
                  <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                  order details
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="bill">
                  <span data-feather="layers" class="align-text-bottom"></span>
                  first bill
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" id="payment">
                  <span data-feather="layers" class="align-text-bottom"></span>
                  payment
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" id="logistics">
                  <span data-feather="layers" class="align-text-bottom"></span>
                  logistics company
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pickup">
                  <span data-feather="layers" class="align-text-bottom"></span>
                  logistics pickup
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="delivery">
                  <span data-feather="layers" class="align-text-bottom"></span>
                  logistics delivery
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="staff">
                  <span data-feather="layers" class="align-text-bottom"></span>
                  staff
                </a>
              </li>
            </ul>

           
           
          </div>
        </nav>