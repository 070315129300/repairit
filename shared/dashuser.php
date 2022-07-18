<?php 
	include_once "constants.php";

	class Dashuser{
		public $dbconn;

		function __construct(){
			$this->dbconn = new Mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);
			if($this->dbconn->connect_error){
				die('connection Failed:'.$this->dbconn->connect_error);

			}
		}
		//begin insert book order
			function order($fullname,$email, $phone, $address, $city, $dmodel, $fault){
				//prepare statement
				$stmt = $this->dbconn->prepare("INSERT INTO(fullname, email, phone, address, city, dmodel, fault)VALUES(?,?,?,?,?,?,?)");
				$stmt->bind_param('sssssss', $fullname, $email, $phone, $address, $city, $dmodel, $fault);
				$stmt->execute();
				if($stmt->affected_rows ==1){
                    return true;
                }else{
                    echo "oops! something went wrong try again later".$stmt->error;
                }
			}
		//end insert end book order

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
        	 public function customer(){
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
         public function contactus(){
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

	}
 ?>