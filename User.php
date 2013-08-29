<?php 

include_once('connection.php');

class User {

	private $db;

	public function __construct () {

		$this->db = new Connection();
		$this->db = $this->db->dbConnect();
	}

	public function Login($name, $pass) {


		if(!empty($name) && !empty($pass)) {

			$db_PW = "";

			$salt = sha1($pass);
			$db_PW = sha1($salt.$pass);
			
			$st = $this->db->prepare("SELECT * FROM users WHERE name=? AND pass=?");
			$st->bindParam(1, $name);
			$st->bindParam(2, $db_PW);
			$st->execute();

			if($st->rowCount() == 1) {

				$start = 'home.php';

				session_start();

				$_SESSION["auth_username"] = $name;
				
				header('Location:'.$start);
				exit;

			} else {

				echo "Username [".$name."] or Password [".$pass."] Incorrect.";
				echo "<br />";
				echo "RowCount: ".$st->rowCount();

				//echo " count: ".$st->rowCount();
				//echo " User: ".$name." Pass: ".$pass." encrypted: ".$crypt_pass;
				exit;
			}
		} else {
   			echo "Username or Password _BLANK ";
   			exit;
		}
	}

	//public function logout ($name) {

		//$st = $this->db->prepare("UPDATE users SET active='0' WHERE name=?");
		//$st->bindParam(1, $name);
		//$st->execute();		
	//}

	public function register($name, $pass, $role) {


		if (!empty($name) && !empty($pass) && !empty($role)) {

			$st = $this->db->prepare("SELECT * from users where name=?");
			$st->bindParam(1, $name);
			$st->execute();

			if($st->rowCount() > 0) {  

				echo "Username Unavailable count: ".$st->rowCount();
			} else {

					$salt = "";
					$page = 'index.php';

					$salt = sha1($pass);
					$db_PW = sha1($salt.$pass);

					$st = $this->db->prepare("INSERT INTO users (name, pass, role) VALUES (?, ?, ?)");
					$st->bindParam(1, $name);
						$st->bindParam(2, $db_PW);
						$st->bindParam(3, $role);
						$st->execute();		

						header('Location:'.$page);

			
			} 
		}
	}  
}

?>