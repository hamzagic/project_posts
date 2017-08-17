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
		
	

	public function insert($uname, $email){

		$query = "INSERT INTO tb_login (username, email) VALUES (?, ?)";

		$stmt = $this->con->prepare($query);
		//$email = $this->email;
		//$name = $this->name;
		$stmt->bind_param('ss', $uname, $email);
		$stmt->execute();


	}

	public function display2(){

		echo "hey";
		var_dump($stmt);


	}
}

class SignLogin extends Database{

	//signup, login and post 
	//private $name;
	private $email;
	private $msg;
	private $username;
	private $fname;
	private $lname;
	private $pass;
	private $id;


		public function signUp2(){

			$this->fname = $fname;
			$this->lname = $lname;	
			$this->username = $username;
			$this->email = $email;
			$this->pass = $pass;
			//$this->pass2 = $pass2;

			//$username = mysqli_real_escape_string($this->con, $_POST['username']);
			//$email = mysqli_real_escape_string($this->con, $_POST['email']);

			/*
			//verify if email already exists
			$verEmail = "SELECT * FROM tb_login WHERE email = '$email'";
			$stmt = $this->con->prepare($verEmail);
			$stmt->execute();
			$stmt->store_result();
			if ($stmt->num_rows >= '1') {
				echo "This email already exists";
				return false;
			} else {
				*/

				if ($_POST['submit'] == "1") {
					# code...
				
				//set hash password
				//$pass = mysqli_real_escape_string($this->con, $_POST['pass']);
				//$pass2 = password_hash($pass, PASSWORD_DEFAULT);	

				//if ($_POST['fname'] == "") {
						//echo "All fields are required";
						
					//} else {

				//get data from form
				$fname = mysqli_real_escape_string($this->con, $_POST['fname']);
				$lname = mysqli_real_escape_string($this->con, $_POST['lname']);
				$username = mysqli_real_escape_string($this->con, $_POST['username']);
				$email = mysqli_real_escape_string($this->con, $_POST['email']);
				$pass = mysqli_real_escape_string($this->con, $_POST['pass']);

									
					

				 

					//insert data to tb_profile
					$query = "INSERT INTO tb_profile (fname, lname, username, email, pass) VALUES (?, ?, ?, ?, ?)";
					$stmt = $this->con->prepare($query);
					$stmt->bind_param('sssss', $fname, $lname, $username, $email, $pass);
					$stmt->execute();
					
						if (!$stmt) {
							//header('Location: index.php');
							echo "Could not sign up";
						} else {

							echo "11";
						  }

				   //}
			}


		}


		public function login(){

			$this->pass2 = $pass2;
			$this->email = $email;

			$query = "SELECT * FROM tb_login WHERE email = '$email'";
			$stmt = $this->con->prepare($query);
			$stmt->execute();
			$stmt->store_result();
			$stmt->fetch_assoc();


			if($stmt->num_rows = 1){

				$hash = mysqli_real_escape_string($this->con, $_POST['pass']);

				if (password_verify($pass2, $hash)) {
					echo 1;
				} else {

					echo "Your email or password is not valid. Please try again.";
				}
			}


		}
		public function signUp(){

					
			$this->name = $username;
			$this->email = $email;

			$username = mysqli_real_escape_string($this->con, $_POST['username']);
			$email = mysqli_real_escape_string($this->con, $_POST['email']);

			$query = "INSERT INTO tb_login (username, email) VALUES (?, ?)";

			$stmt = $this->con->prepare($query);
			$stmt->bind_param('ss', $username, $email);
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

				
					//$var = $_POST['submit'];

					//if ($var == "posted") {

				//$var = $_GET['action'];
					//if ($var == 'posted') {
										

						$this->username = $username;
						$this->msg = $msg;
						

						$username = mysqli_real_escape_string($this->con, $_POST['usr']);
						$msg = mysqli_real_escape_string($this->con, $_POST['msg']);

						$query = "INSERT INTO tb_posts (username, msg) VALUES (?, ?)";

						$stmt = $this->con->prepare($query);
						$stmt->bind_param('ss', $username, $msg);
						$stmt->execute();

						if (!$stmt) {
							echo "An error occurred.";
						} 

						echo "posted";
					//}		
		}

		public function editProfile(){

				$this->fname = $fname;
				$this->lname = $lname;							
				$this->username = $username;
				//$this->email = $email;
				$this->pass = $pass;
				$this->id = $id;


				$fname = mysqli_real_escape_string($this->con, $_POST['fname']);
				$lname = mysqli_real_escape_string($this->con, $_POST['lname']);
				$username = mysqli_real_escape_string($this->con, $_POST['username']);
				//$email = mysqli_real_escape_string($this->con, $_POST['email']);
				$pass = mysqli_real_escape_string($this->con, $_POST['pass']);
				$id = mysqli_real_escape_string($this->con, $_SESSION['id']);

				$query1 = "SELECT fname, lname, username, pass FROM tb_profile WHERE id = ? LIMIT 1";

				$stmt = $this->con->prepare($query1);
				$stmt->bind_param('s', $id);
				$stmt->execute();

				if(!$stmt){

					echo "error";
					return false;

				} else {


					$query2 = "UPDATE tb_profile SET fname = $fname, lname = $lname, usename = $username, pass = $pass WHERE id = $id";
					$stmt = $this->con->prepare($query2);
					$stmt->execute();

					if(!$stmt){

						echo "not done";
						return false;
					}
				}


		}
}



?>