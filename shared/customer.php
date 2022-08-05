<?php 
    include_once('constants.php');

    class Customer{
        public $firstname;
        public $dbconn;

        function __construct(){
            $this->dbconn = new Mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);
            
            if($this->dbconn->connect_error){
                die('connection Failed:'. $this->dbconn->connect_error);
            }else{
                // "connection successful";
            }
        }
            
        //begin insert
            function custome($firstname, $lastname, $email, $password, $phone, $gender){
                //prepare statement
                $pwd = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $this->dbconn->prepare("INSERT INTO customer(firstname, lastname, email, gender, phone, password)VALUES(?,?,?,?,?,?)");
                $stmt->bind_param('ssssss',$firstname,$lastname, $email,  $phone, $gender, $pwd);
                //execute
                $stmt->execute();
                if($stmt->affected_rows ==1){
                    return true;
                    //echo "insert successfull";
                }else{
                    echo "oops! something went wrong try again later".$stmt->error;
                }
            }
        //end insert
                //begin insert book order
            function order($fullname, $customer_email, $address, $city, $devicemodel, $fault){
                //prepare statement
                $stmt = $this->dbconn->prepare("INSERT INTO order_details(fullname, customer_email, address, city, devicemodel, fault)VALUES(?,?,?,?,?)");
                $stmt->bind_param('sssss', $fullname, $customer_email, $address, $city, $devicemodel, $fault);
                $stmt->execute();
                if($stmt->affected_rows ==1){
                    return true;
                }else{
                    echo "oops! something went wrong try again later".$stmt->error;
                }
            }
        //end insert end book order
             
            //begin insert staff
                function addstaff($staff_name, $staff_email, $staff_address, $staff_qualification){
                //prepare statement
                $stmt = $this->dbconn->prepare("INSERT INTO staff(staff_name,staff_email, staff_address, staff_qualification )VALUES(?,?,?,?)");
                $stmt->bind_param('ssss', $staff_name, $staff_email, $staff_address, $staff_qualification);
                $stmt->execute();
                if($stmt->affected_rows ==1){
                    return true;
                }else{
                    echo "oops! something went wrong try again later".$stmt->error;
                }
            }

            //end insert staff
            //begin insert log
                function log($log_name, $log_email, $log_phone){
                //prepare statement
                $stmt = $this->dbconn->prepare("INSERT INTO logistics_company(log_name, log_email, log_phone )VALUES(?,?,?)");
                $stmt->bind_param('sss', $log_name, $log_email, $log_phone);
                $stmt->execute();
                if($stmt->affected_rows ==1){
                    return true;
                }else{
                    echo "oops! something went wrong try again later".$stmt->error;
                }
            }

            //end insert log
            //begin get log
            public function getlog($log_id){
            // prepare statement
            $statement = $this->dbconn->prepare("SELECT * FROM logistics_company WHERE log_id=?");

            // bind the parameter
            $statement->bind_param("i", $log_id);

            // execute
            $statement->execute();

            // get result
            $result = $statement->get_result();
            
            return $result->fetch_assoc();
        }
        # end getClub
            // end get log
                # begin updateClub method
        public function updatelog($log_name, $log_email, $log_phone){
            // prepare the statement
            $statement = $this->conn->prepare("UPDATE logistics_company SET log_name=?, log_email=?, log_phone=?");
            // bind parameters
            $statement->bind_param("sss", $log_name, $log_email, $log_phone);

            // execute
            $statement->execute();

            // check if record was updated
            if ($statement->affected_rows == 1){
                return $statement->affected_rows;
            }
        }
        # end updateClub method
        // begin admin login
                            function login($email, $password){
               $stmt = $this->dbconn->prepare('SELECT * FROM admin WHERE email=?');
               
               // bind parameter
            $stmt->bind_param("s",$email);

            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows == 1){
                $row = $result->fetch_assoc();

                //verify paasword

            if(password_verify($password, $row['password'])){

               session_start();
                      $_SESSION['lastname'] = $row['lastname'];
                    $_SESSION['firstname'] = $row['firstname'];
                    $_SESSION['letmein'] = "supercayleb";
                    $_SESSION['myemail'] = $row['email'];
                    $_SESSION['mycust_id'] = $row['customer_id'];
                    return true;
               
            }else {
                   // echo " doesn't match";
                    return false;
                }
            }else {
                //echo "email address doesn't exist";
                return false;
          
            }
            }
        // end admin login

        // begin  login
                function Clogin($email, $password){
               $stmt = $this->dbconn->prepare('SELECT * FROM customer WHERE email=?');
               
               // bind parameter
            $stmt->bind_param("s",$email);

            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows == 1){
                $row = $result->fetch_assoc();

                //verify paasword

            if(password_verify($password, $row['password'])){

                session_start();
                    $_SESSION['lastname'] = $row['lastname'];
                    $_SESSION['firstname'] = $row['firstname'];
                    $_SESSION['letmein'] = "cayleb";
                    $_SESSION['myemail'] = $row['email'];
                    $_SESSION['mycust_id'] = $row['customer_id'];

                return true;
               }else {
                   // echo " doesn't match";
                    return false;
                }
            }else {
                //echo "email address doesn't exist";
                return false;
          
            }
            }

        // end login
        //begin logout

     
        function logout(){
            session_start();
            session_destroy();

            // redirect to login
            header("Location: login.php");
            exit();
        }
         //begin insert contact us 
             function contactus($fullname, $email, $message){
                //prepare statement
               
                $stmt = $this->dbconn->prepare("INSERT INTO contactus(fullname, email, message )VALUES(?,?,?)");

                $stmt->bind_param('sss', $fullname, $email, $message );

                //execute

                $stmt->execute();
                if($stmt->affected_rows ==1){
                    return true;
                }else{
                    return false;
                }
            }
            //end contact us 
            function adminlogout(){
            session_start();
            session_destroy();

            // redirect to login
            header("Location: admin_login.php");
            exit();
        }
    }
            
   
?>