<?php 

class Data{
	//You can edit the follow setting for databse
	private $db_name = "test";
	private $db_host = "localhost";
	private $db_user = "root";
	private $db_pass = "";
	private $data;
	private $database;

	public function __construct()
	{
		$this->database = new PDO("mysql:host=".$this->db_host.
			";dbname=".$this->db_name, 
			$this->db_user,
			$this->db_pass
		);
		$this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		return $this->database;

	}

	//Here you can create some function to interact to database
}

 ?>