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
            function customer($firstname, $lastname, $email, $password, $phone, $gender){
                //prepare statement
                $pwd = password_hash($password, PASSWORD_DEFAULT);

                $stmt = $this->dbconn->prepare("INSERT INTO customer(firstname, lastname, email, password, phone, gender)VALUES(?,?,?,?,?,?)");
                $stmt->bind_param('ssssss',$firstname,$lastname, $email, $pwd, $phone, $gender);

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

               // session_start();
               // header("location:dashboard.php");
               
            }else{
                 return false;
    exit(); 
            }
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

               // session_start();
                    $_SESSION['lastname'] = $row['lastname'];
                    $_SESSION['firstname'] = $row['firstname'];
                    $_SESSION['letmein'] = "cayleb";
                    $_SESSION['myemail'] = $row['email'];

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
    }
            
   
?>