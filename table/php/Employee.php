<?php
require('config.php');
class Employee extends Dbconfig {	
    protected $hostName;
    protected $userName;
    protected $password;
	protected $dbName;
	private $empTable = 'addcareers';
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
			$sqlQuery .= ' OR title LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR timing LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR position LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR description LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR years LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR place LIKE "%'.$_POST["search"]["value"].'%") ';			
			$sqlQuery .= ' OR tag1 LIKE "%'.$_POST["search"]["value"].'%") ';			
			$sqlQuery .= ' OR tag2 LIKE "%'.$_POST["search"]["value"].'%") ';			
			$sqlQuery .= ' OR job_status LIKE "%'.$_POST["search"]["value"].'%") ';			
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
			$empRows[] = ucfirst($employee['title']);
			$empRows[] = ucfirst($employee['timing']);
			$empRows[] = $employee['position'];		
			$empRows[] = $employee['place'];	
			$empRows[] = $employee['years'];
			$empRows[] = $employee['gender'];
			$empRows[] = $employee['description'];					
			$empRows[] = $employee['salary_from'];					
			$empRows[] = $employee['salary_to'];					
			$empRows[] = $employee['tag1'];					
			$empRows[] = $employee['tag2'];					
			$empRows[] = $employee['job_status'];					
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
			SET title = '".$_POST["title"]."', timing = '".$_POST["timing"]."', position = '".$_POST["position"]."', place = '".$_POST["place"]."', years = '".$_POST["years"]."' , description = '".$_POST["description"]."' , gender = '".$_POST["gender"]."' ,   salary_from = '".$_POST["salary_from"]."' ,  salary_to = '".$_POST["salary_to"]."' , tag1 = '".$_POST["tag1"]."' , tag2 = '".$_POST["tag2"]."' , job_status = '".$_POST["job_status"]."'
			WHERE id ='".$_POST["id"]."'";
			$isUpdated = mysqli_query($this->dbConnect, $updateQuery);		
		}	
	}
	public function addEmployee(){
		$insertQuery = "INSERT INTO ".$this->empTable." (title,  timing, position, place, years, description, tag1, tag2, job_status ) 
			VALUES ('".$_POST["title"]."', '".$_POST["timing"]."', '".$_POST["position"]."', '".$_POST["place"]."', '".$_POST["years"]."', '".$_POST["description"]."', '".$_POST["tag1"]."' , '".$_POST["tag2"]."' , '".$_POST["job_status"]."')";
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