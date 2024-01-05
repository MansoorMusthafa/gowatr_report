<?php
require('config.php');
class Employee extends Dbconfig {	
    protected $hostName;
    protected $userName;
    protected $password;
	protected $dbName;
	private $empTable = 'report_site';
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 		
			$database = new dbConfig();            
            $this -> hostName = $database -> serverName;
            $this -> userName = $database -> userName;
            $this -> password = $database ->password;
			$this -> dbName = $database -> dbName;			
            $conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            } else{
                $this->dbConnect = $conn;
            }
        }
    }




	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[]=$row;            
		}
		return $data;
	}


	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}   	


	public function employeeList(){		
		$sqlQuery = "SELECT * FROM ".$this->empTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR time_received LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR site_name LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR power LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR iot_1 LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR network LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR power_issue LIKE "%'.$_POST["search"]["value"].'%") ';			
			$sqlQuery .= ' OR iot2_issue LIKE "%'.$_POST["search"]["value"].'%") ';			
			$sqlQuery .= ' OR images LIKE "%'.$_POST["search"]["value"].'%") ';			
			$sqlQuery .= ' OR summary LIKE "%'.$_POST["search"]["value"].'%") ';			
		}



		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY id DESC ';
		}


		if($_POST["length"] != -1){
			$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}	


		$result = mysqli_query($this->dbConnect, $sqlQuery);
		
		$sqlQuery1 = "SELECT * FROM ".$this->empTable." ";
		$result1 = mysqli_query($this->dbConnect, $sqlQuery1);
		$numRows = mysqli_num_rows($result1);
		
		$employeeData = array();	
		while( $employee = mysqli_fetch_assoc($result) ) {		
			$empRows = array();			
			$empRows[] = $employee['id'];
			$empRows[] = ucfirst($employee['time_received']);
			$empRows[] = ucfirst($employee['site_name']);
			$empRows[] = $employee['power'];		
			$empRows[] = $employee['power_issue'];	
			$empRows[] = $employee['network'];
			$empRows[] = $employee['network_issue'];
			$empRows[] = $employee['iot_1'];					
			$empRows[] = $employee['iot1_issue'];					
			$empRows[] = $employee['iot_2'];					
			$empRows[] = $employee['iot2_issue'];					
			$empRows[] = $employee['images'];					
			$empRows[] = $employee['summary'];					
			$empRows[] = $employee['issue_status'];					
			$empRows[] = '<button type="button" name="update" id="'.$employee["id"].'" class="btn btn-warning btn-xs update">Update</button>';
			$empRows[] = '<button type="button" name="delete" id="'.$employee["id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
			$employeeData[] = $empRows;
		}
		$output = array(
			"draw"				=>	intval($_POST["draw"]),
			"recordsTotal"  	=>  $numRows,
			"recordsFiltered" 	=> 	$numRows,
			"data"    			=> 	$employeeData
		);
		echo json_encode($output);
	}
	public function getEmployee(){
		if($_POST["id"]) {
			$sqlQuery = "
				SELECT * FROM ".$this->empTable." 
				WHERE id = '".$_POST["id"]."'";
			$result = mysqli_query($this->dbConnect, $sqlQuery);	
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			echo json_encode($row);
		}
	}
	public function updateEmployee(){
		if($_POST['id']) {	
			$updateQuery = "UPDATE ".$this->empTable." 
			SET time_received = '".$_POST["time_received"]."', site_name = '".$_POST["site_name"]."', power = '".$_POST["power"]."', power_issue = '".$_POST["power_issue"]."', network = '".$_POST["network"]."' , iot_1 = '".$_POST["iot_1"]."' ,   iot1_issue = '".$_POST["iot1_issue"]."' ,  iot_2 = '".$_POST["iot_2"]."' , iot2_issue = '".$_POST["iot2_issue"]."' , images = '".$_POST["images"]."' , summary = '".$_POST["summary"]."', issue_status = '".$_POST["issue_status"]."'
			WHERE id ='".$_POST["id"]."'";
			$isUpdated = mysqli_query($this->dbConnect, $updateQuery);		
		}	
	}
	public function addEmployee(){
		$insertQuery = "INSERT INTO ".$this->empTable." (time_received,  site_name, power, power_issue, network, network_issue, iot_1, iot1_issue, iot_2, iot2_issue, images, summary, issue_status ) 
			VALUES ('".$_POST["time_received"]."', '".$_POST["site_name"]."', '".$_POST["power"]."', '".$_POST["power_issue"]."',   '".$_POST["network"]."', '".$_POST["network_issue"]."', '".$_POST["iot_1"]."', '".$_POST["iot1_issue"]."' ,'".$_POST["iot_2"]."', '".$_POST["iot2_issue"]."' , '".$_POST["images"]."' , '".$_POST["summary"]."' , '".$_POST["issue_status"]."')";
		$isUpdated = mysqli_query($this->dbConnect, $insertQuery);		
	}
	public function deleteEmployee(){
		if($_POST["id"]) {
			$sqlDelete = "
				DELETE FROM ".$this->empTable."
				WHERE id = '".$_POST["id"]."'";		
			mysqli_query($this->dbConnect, $sqlDelete);		
		}
	}
}
?>