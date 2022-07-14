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
                //echo "connection successful";
            }
        }
        //begin insert
            function insertcustomer($firstname, $lastname, $email, $password, $phone, $gender){
                //prepare statement
                $pwd = password_hash($password, PASSWORD_DEFAULT);

                $stmt = $this->dbconn->prepare("INSERT INTO customer(firstname, lastname, email, password, phone, gender)VALUES(?,?,?,?,?,?)");
                $stmt->bind_param('ssssss',$firstname,$lastname, $email, $pwd, $phone, $gender);

                //execute

                $stmt->execute();
                if($stmt->affected_rows ==1){
                    return true;
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

                session_start();
                header("location:dashboard.php");
               
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

                session_start();
                header("location:dashboard.php");
               
            }else{
                 return false;
    exit(); 
            }
            }


                }
        // end login
        //begin logout

        function logout(){
            session_start();
            session_destroy();

            header('Location:login.php');
            exit();
        }
         //begin insert contact us 
             function contactus($fullname, $email, $message){
                //prepare statement
               
                $sttmt = $this->dbconn->prepare("INSERT INTO contact_us(fullname, email, message )VALUES(?,?,?)");

                $sttmt->bind_param('sss', $fullname, $email, $message );

                //execute

                $sttmt->execute();
                if($sttmt->affected_rows ==1){
                    return true;
                }else{
                    return false;
                }
            }
            //end contact us 
    }
            
   
?>