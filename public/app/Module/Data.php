<?php 

class Data{
	//You can edit the follow setting for databse
	private $db['db_name'] = "test";
	private $db['db_host'] = "localhost";
	private $db['db_user'] = "root";
	private $db['db_pass'] = "";
	private $data;
	private $database;

	public function __construct()
	{
		$this->database = new PDO("mysql:host=".$this->db['db_host'].
			"dbname=".$this->db['db_name'], 
			$this->db['db_user'],
			$this->db['db_pass']
		);
		$this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->database->setAttribute(PDO::ATTR_DEFAULT_FETCH, PDO::FETCH_OBJ);
		return $this->database;

	}

	//Here you can create some function to interact to database
}

 ?>