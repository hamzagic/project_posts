<?php

class Database{ 

private $host = "localhost";
private $user = "root";
private $pwd = "mysql";
private $db = "users";
public $con;

	public function __construct(){

		$this->con = new mysqli($this->host, $this->user, $this->pwd, $this->db);

		if (!$this->con) {
			echo "Could not connect";

		} 


	}
}





