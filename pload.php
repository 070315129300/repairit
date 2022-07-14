<?php 
	var_dump($_POST);

		$stateid = $_POST['mystateid'];

		include_once("shared/customer.php");

		$obj = new customer();

		$lgas = $obj->getLga($stateid);

		// echo "<pre>";

		// print_r($lgas);

		// echo "</pre>";


			$options = "<option value=''>choose lga</option>";

		if(!empty($lgas)){
			foreach ($lgas as $key => $value){
			$lgaid = $value['lga_id'];

			$lganame = $value['lga_name'];

			$options .="<option value='$lgaid'>$lganame</option>";
			}
		}

			echo $options;
?>