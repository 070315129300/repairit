
		<?php  
		
	
	// echo "<pre>";
	// print_r($_SERVER);
	// echo "</pre>";

	//check if send mesage is clicked 
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		#validate inputs
		if(isset($_POST['btnsignup'])){
                //validate
                if(empty($_POST['firstname'])){
                $errors['firstname'] = "first name can't be empty";
                }
                 if(empty($_POST['lastname'])){
                $errors['lastname'] = "last name can't be empty";
                }
                if(empty($_POST['email'])){
                $errors['email'] = "email can't be empty";
                }
                if(empty($_POST['password'])){
                $errors['password'] = "password can't be empty";
                }elseif(strlen($_POST['password']) <6){
					$errors['password'] = "password must be more than 5 charaters";
				}
                if(empty($_POST['gender'])){
                $errors['gender'] = "gender can't be empty";
                }
                if(empty($_POST['phone'])){
                $errors['phone'] = "phone can't be empty";
                }
			
				if(empty($errors)){
					    header('Location:login.php');
                 }else{
                    die('something went wrong pls try again later'); 

		#sanitize inputs
		//   $objcust = new sanitize;
        //         $firstname = $objcust->sanitizeInput($_POST['firstname']);

        //         $lastname = $objcust->sanitizeInput($_POST['lastname']);
        //        $email = $objcust->sanitizeInput($_POST['email']);
        //         $phone = $objcust->sanitizeInput($_POST['phone']);
		// 		$password = $_POST['password'];
		// 		$gender = $_POST['gender'];

           
		// 		include_once("shared/customer.php");
		// 		$objcust = new customer();
		// 				//start inspection

		// 				//end inspection
		// 		$output = $objcust->insertcustomer($firstname, $lastname, $email, $password, $phone, $gender);
		// 		 if($output == true){
        //             header('Location:login.php');
        //         }else{
        //             die('something went wrong pls try again later');
        //         }

		# create object of message class

		include_once("shared/customer.php");

		$msgobj = new customer();

		$msgobj->insertcustomer($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['phone'], $_POST['gender']);
		}
	}
	}

	?>
	
	<?php 

	include_once('shared/customer.php');

		$obj = new customer();

		$states = $obj->getStates();

		

	 ?>
		

	<div class="container-fluid" >
		<div  class="row">
			<div class="col-md-12">
			<div id="book_a"></div>	
			</div>
				<div class="col-md-6" justify-content>
				

				<form method="post" action="" >
						
		

					<h1 id="conct">Sign up</h1>
					<label>First Name *</label><br>
					<input type="text" name="firstname" id="fname"  required><br>
					<label>Last Name *</label><br>
					<input type="text" name="lastname" id="lname"  required><br>
					<label>Email *</label><br>
					<input type="email" name="email" id="mail"  required><br>
					<label>Password *</label><br>
					<input type="password" name="password" id="pass"  required><br>
					<label>Phone Number *</label><br>
					<input type="number" name="phone" id="num" required><br>
					<label for="state">State</label><br>
					<select for="state" id="state">
						<option value="">please select</option>
						<?php 
						if(count($states) > 0){
							foreach($states as $key => $value){
								$stateid = $value['state_id'];
							$statename = $value['state_name'];
							echo "<option value='$stateid'>$statename </option>";
							}
						}
					?>
					</select>
					<label for="lga">LGA</label><br>
					<select name="lga" id="lga" disabled>
						<option value="">select lga</option>
						
					</select>
					<input type="radio" name="gender" value="male"><span>Male</span>
					<input type="radio" name="gender" value="female"><span>Female</span><br>
					<button class="btn-outline-warning mb-5 mt-5" id="btnsignup" onclick="btnsign()">Sign up</button>
				</form>
			</div>
		</div>
	</div>
	<!--JS script-->
	<script type="text/javascript"> 

	

			$(document).ready(function(){
			$('#btnsignup').click(function(){
				var firstname = $('#fname').val();
				var lastname = $('#lname').val();
				var email = $('#mail').val();
				var phone = $('#num').val();
				var password = $('#pass').val();

				if(firstname=='' || password=='' || lastname=='' || email==''|| phone==''){
			alert('please fill the all field')
			}
			else{
				//alert('welcome')
			}
			})
			})

			$(document).ready(function(){
				$('#state').change(function(){
					var states = $(this).val();
					$('#lga').load('pload.php',{mystates:state},function(){
						$('#lga').prop('disabled', false);
					})

					})
				})
			
</script>
<!--footer-->
<?php 
	include "include/footer.php"
?>

<!--keep customer copy-->

<?php 
    include_once("constants.php");

    class customer{
        public $firstname;
        public $lastname;
        public $email;
        public $dbconn;

        function __construct(){
            //connect to mysqli
            $this->dbconn = new Mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

            if($this->dbconn->connect_error){
                die("connection Failed: ".$this->dbconn->connect_error);
            }else{
              //  echo "connection successful";
            }

        }
        //begin insert
            function insertcustomer($firstname, $lastname, $email, $password, $phone, $gender ){
                //prepare statement

                $pwd = password_hash($password, PASSWORD_DEFAULT);

                $stmt = $this->dbconn->prepare("INSERT INTO customer(firstname, lastname, email, password,phone, gender )VALUES(?,?,?,?,?,?)");

                $stmt->bind_param('ssssss',$firstname, $lastname, $email, $pwd, $phone, $gender);

                //execute

                $stmt->execute();
                if($stmt->affected_rows ==1){
                   header("location:login.php"); 
                }else{
                    return "oops! something went wrong".$stmt->error;
                }
            }
            //insert end
            //login start

         function login($email, $password){
            $statement = $this->dbconn-prepare('SELECT * FROM customer JOIN ...... ON customer.,.....=... WHERE email = ?');

            //bind the para
          //  $statement->bind_param('s'$email);

            $statement->execute();
            $result = $statement->get_result();

            //fetch record
            if($result->num_rows ==1){
                $row = $result->fetch_assoc();
                //verify password
                if(password_verify($password, $row['password'])){
                  SESSION_START();
                   $_SESSION['myuserid'] = $row['user_id'];
						$_SESSION['customer_id'] = $row['customer_id'];
						$_SESSION['lastname'] = $row['lastname'];
						$_SESSION['firstname'] = $row['firstname'];
						$_SESSION['mylogger'] = "kleb_pass";
					
                        return true;
                }else{
                     return false;
                }else{
                    return false;
                }
            }
         }
         //end login

         //begin log out
        function logout(){
            session_start();
            session_destroy();
            
            header("location:login.php");
            exit();
        }           
      */
      //begin getstates method

		function getStates(){
			$statement = $this->dbconn->prepare("SELECT * FROM state");
			//execute

			$statement->execute();

			//get result

			$result = $statement->get_result();

			//fetct

			$data = array();

			if($result->num_rows > 0){
			while ($row = $result->fetch_assoc()){
				$data[] = $row;
			}
			}
			return $data;
		}
		//end get state method 

		//begin get lga
			function getLga($stateid){
				//prepare

				$statement = $this->dbconn->prepare("SELECT * FROM lga WHERE state_id = ?");

				//bind 

				$statement->bind_param("i",$stateid);
				//execute

				$statement->execute();

				$result = $statement->get_result();

				$records = array();
				if($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()){
						$records[] = $row;
					}
				}
				return $records;
			}
		//end get lga 
    }
?>

///delete this

<?php 
    // include constants file
    include_once("constants.php");

    // class definition
    class User{
        // member variables
        public $lastname;
        public $firstname;
        public $email;
        public $password;
        public $conn; // database connection handler

        // member functions
        function __construct(){
            // create object of mysqli
            $this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

            // check if connected to DB
            if ($this->conn->connect_error) {
                die("Failed: ".$this->conn->connect_error);
            }
        }

        # begin login
        function login($email, $password){
            // prepare statement
            $statement = $this->conn->prepare("SELECT * FROM users JOIN roles ON users.role_id=roles.role_id WHERE emailaddress=?");
            
            // bind parameter
            $statement->bind_param("s",$email);

            // execute
            $statement->execute();

            // get result
            $result = $statement->get_result();

            // fetch record
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();

                // verify password
                if (password_verify($password, $row['password'])) {
                    // password match, then create ksession variable

                    session_start();

                    $_SESSION['myuserid'] = $row['user_id'];
                    $_SESSION['myrole'] = $row['role_name'];
                    $_SESSION['lastname'] = $row['lastname'];
                    $_SESSION['firstname'] = $row['firstname'];
                    $_SESSION['mylogger'] = "OT_BestIR01";

                    return true;
                }else {
                    // password doesn't match
                    return false;
                }
            }else {
                // email address doesn't exist
                return false;
            }
        }
        # end login

        # begin logout
        function logout(){
            session_start();
            session_destroy();

            // redirect to login
            header("Location: login.php");
            exit();
        }
    }
?>
//pay attention

<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST'){
	

	if(isset($_POST['btnsignup'])){
		if(empty($_POST['firstname'])){
			$errors['firstname'] = "firstname cannot be empty!";

		}
		if(empty($_POST['lastname'])){
			$errors['lastname'] = "lastname cannot be empty!";
		}
		if(empty($_POST['email'])){
			$errors['email'] = "email cannot be empty!";
			die('email can not be empty ');
		}
		if(empty($_POST['password'])){
			$errors['password'] = "password cannot be empty";
			die('password can not be empty ');
		}
		if(empty($_POST['phone'])){
			$errors['phone'] = "phone number cannot be empty";
			die('phonenumber can not be empty ');
		}
		if(empty($_POST['gender'])){
			$errors['gender'] = "gender cannot be empty";
			die('gender can not be empty');
		}
		//sanitize

	}

	include_once('shared/customer.php');

	$obj = new Customer();

	$output = $obj->insertcustomer($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['phone'], $_POST['gender']);

	if ($output == '') {
		$error = "<div class='alert alert-danger'>PLEASE FILL ALL FIELD</div>";
	}else{
		// login successfull, then redirect to dashboard/landing page
            header("Location: login.php");
            exit();
	}
  }
?>

 <!--navbar start-->
  <!-- <nav >
    <ul>
      <li>
        <a href="#" class="logo"> 
          <img src="" alt="">
          <span class="nav-item">repair it</span>
        </a>
      </li>
      <li><a href="#">
        <i class="fas fa-home"></i>
        <span class='nav-item'>Home</span>
     </a></li>
       <li><a href="#"> 
         <i class="fas fa-user"></i>
        <span class='nav-item'>profile</span>
       </a></li>
        <li><a href="#">
           <i class="fas fa-wallet"></i>
        <span class='nav-item'>payment</span> 
      </a></li>
         <li><a href="#">
           <i class="fas fa-chart-bar"></i>
        <span class='nav-item'>analytics</span>
       </a></li>
          <li><a href="#">
             <i class="fas fa-task"></i>
        <span class='nav-item'>task</span>
        </a></li>
           <li><a href="#"> 
            <i class="fas fa-cog"></i>
        <span class='nav-item'>setting</span>
          </a></li>
            <li><a href="#"> <i class="fas fa-question-circle"></i>
        <span class='nav-item'>message</span>
       </a></li>
       <li><a href="#"> <i class="fas fa-sign-out-alt"></i>
        <span class='nav-item'>log out</span>
       </a></li>
            
    </ul>
  </nav> -->
	<!--Navbar-->


