<?php
	session_start();
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	if(isset($_POST)){
		$config = parse_ini_file('../private/credentials.ini');
		$servername = $config["servername"];
		$username = $config["username"];
		$password = $config["password"];
		$dbname = $config["dbname"];
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->prepare("INSERT INTO user (name,  email,  username,  password) 
											  VALUES (:name, :email, :username, :password)");
			$stmt->bindParam(':name', $name);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':username', $un);
			$stmt->bindParam(':password', $userpassword);	
            
			$name = $_POST['signUpName'];
			$email = $_POST['signUpEmail'];
			$un = $_POST['signUpUsername'];
			$userpassword = $_POST['signUpPassword'];
            $userpassword = password_hash($userpassword,PASSWORD_DEFAULT);
			$stmt->execute();
			$uid=$conn->lastInsertId();
			echo "New accounted created";
			$_SESSION["userID"]=$uid;
			$_SESSION["username"] = $uid;
			$_SESSION["name"]=$name;
			header('Location: index.php');
		}
		catch(Exception $e){
			echo "Error: " . $e->getMessage();
		}
		$conn = null;
	}
?>