<?php 
	// include("../data/database.php")
class Model
{
	public $connection;
	public $host="localhost";
	public $dbname="diu_halima";
	public $user="root";
	public $password="";

	public function __construct()
	{

	}
	public function dbConnect (){
		$this->connection = new PDO("mysql:host=$this->host; dbname=$this->dbname", $this->user,$this->password);
		return $this->connection;
	}

	public function tryLogin($username, $password)
	{
	$query =$this->connection->prepare("SELECT * FROM hh_operators where hh_email=:USER_EMAIL AND hh_password=:USER_PASSWORD");
	$value = array(
		":USER_EMAIL" => $username,
		":USER_PASSWORD" => sha1($password)
	);
	$query-> execute ($value);
	$rowCount = $query-> rowCount();

	if ($rowCount>0){
		return true;
	}
	else {
		return false;
	}
	
	}

	public function tryRegister($full_name, $address, $zip, $country, $username, $password)
	{
		
	}

	public function getCount($status)
	{
		$query = $this->connection->prepare("SELECT * FROM hh_operators where hh_status=:STATUS");
		$value = array(
			":STATUS"=> $status
		);

		$query-> execute ($value);
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		return count($result);
	}

}

?>