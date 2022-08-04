<?php 
	include_once "constants.php";

	class Dashuser{
        public $fullname;
		public $dbconn;

		function __construct(){
			$this->dbconn = new Mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);
			if($this->dbconn->connect_error){
				die('connection Failed:'.$this->dbconn->connect_error);
			}else{
                 echo "connection suceessful";
            }
		}
			
		//fetch staff
			 public function staff(){
            // prepare statement
            $stmt = $this->dbconn->prepare("SELECT * FROM staff");

            // execute
            $stmt->execute();

            // get result
            $result = $stmt->get_result();
            $re=array();
            if ($result->num_rows > 0) {
                # fetch row
                while ($row = $result->fetch_assoc()) {
                    $re[] = $row;
            }}
            
            return $re;
        }
		//end fetch staff
        
		//fetch customer details
        	 public function customerss(){
            // prepare statement
            $stmt = $this->dbconn->prepare("SELECT * FROM customer");

            // bind the parameter
           // $stmt->bind_param("i", $staff_id);

            // execute
            $stmt->execute();

            // get result
            $result = $stmt->get_result();
            $re=array();
            if ($result->num_rows > 0) {
                # fetch row
                while ($row = $result->fetch_assoc()) {
                    $re[] = $row;
            }}
            
            return $re;
        }
       
		//end customer details
        //fetch meassage
         public function contact(){
            // prepare statement
            $stmt = $this->dbconn->prepare("SELECT * FROM contactus");

            // execute
            $stmt->execute();

            // get result
            $result = $stmt->get_result();
            $re=array();
            if ($result->num_rows > 0) {
                # fetch row
                while ($row = $result->fetch_assoc()) {
                    $re[] = $row;
            }}
            
            return $re;
        }
        //end fetch message
		//fetch logistic company
        	 public function logistics(){
            // prepare statement
            $stmt = $this->dbconn->prepare("SELECT * FROM logistics_company");

            // execute
            $stmt->execute();

            // get result
            $result = $stmt->get_result();
            $re=array();
            if ($result->num_rows > 0) {
                # fetch row
                while ($row = $result->fetch_assoc()) {
                    $re[] = $row;
            }}
            
            return $re;
        }
		//end logistic company

		//book a repair
        	 public function ordermade(){
            // prepare statement
            $stmt = $this->dbconn->prepare("SELECT * FROM order_details");

            // execute
            $stmt->execute();

            // get result
            $result = $stmt->get_result();
            $re=array();
            if ($result->num_rows > 0) {
                # fetch row
                while ($row = $result->fetch_assoc()) {
                    $re[] = $row;
            }}
            
            return $re;
        }
		//end a repair
         public function paymentmade(){
            // prepare statement
            $stmt = $this->dbconn->prepare("SELECT * FROM pay");

            // execute
            $stmt->execute();

            // get result
            $result = $stmt->get_result();
            $re=array();
            if ($result->num_rows > 0) {
                # fetch row
                while ($row = $result->fetch_assoc()) {
                    $re[] = $row;
            }}
            
            return $re;
        }
	}
 ?>