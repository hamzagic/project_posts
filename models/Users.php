<?php

include 'Database.php';

class Users extends Database{

	private $name;
	private $email;
	public $stmt;
	public $row;
	
	public function query($query){

		//$query = "SELECT * FROM tb_login";
		$result = mysqli_query($this->con, $query);
		$this->row = $row;
		while($row = mysqli_fetch_assoc($result)){
			//echo "<br>";
			//print_r($row);
			//echo "<br>";
			return $row;
			
			
		}
			
		
	}
		
	public function display(){

		$this->query;

		print_r($this->query->row);

	}
		
	

	public function insert($name, $email){

		$query = "INSERT INTO tb_login (name, email) VALUES (?, ?)";

		$stmt = $this->con->prepare($query);
		//$email = $this->email;
		//$name = $this->name;
		$stmt->bind_param('ss', $name, $email);
		$stmt->execute();


	}

	public function display2(){

		echo "hey";
		var_dump($stmt);


	}
}

class SignLogin extends Database{

	//signup, login and post 
	private $name;
	private $email;
	private $msg;

		public function signUp(){

					
			$this->name = $name;
			$this->email = $email;

			$name = mysqli_real_escape_string($this->con, $_POST['name']);
			$email = mysqli_real_escape_string($this->con, $_POST['email']);

			$query = "INSERT INTO tb_login (name, email) VALUES (?, ?)";

			$stmt = $this->con->prepare($query);
			$stmt->bind_param('ss', $name, $email);
			$stmt->execute();

				if (!$stmt) {
					//header('Location: index.php');
					echo "Could not sign up";
				}
		}

		public function displayPost(){


			$query = "SELECT * FROM tb_posts ORDER BY pid DESC";

			$stmt = $this->con->query($query);
			
			while ($row = $stmt->fetch_array()) {
				echo $row['msg'];
				echo "<br>";
				echo $row['date'];
				echo "<br>";
			}
		}

		public function writePost(){

			
					$this->msg = $msg;
					$this->email = $email;

					$email = mysqli_real_escape_string($this->con, $_POST['email']);
					$msg = mysqli_real_escape_string($this->con, $_POST['msg']);

					$query = "INSERT INTO tb_posts (email, msg) VALUES (?, ?)";

					$stmt = $this->con->prepare($query);
					$stmt->bind_param('ss', $email, $msg);
					$stmt->execute();

					if (!$stmt) {
						echo "An error occurred.";
					}
			
		}
		
}

?>