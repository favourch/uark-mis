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
            $stmt = $conn->prepare("SELECT password FROM user WHERE username=:username");

            $stmt->execute(array(':username' => $_POST['loginUsername']));
            $row = $stmt->fetch();


			$userpassword = $_POST['loginPassword'];
            $check = password_verify($userpassword,$row[0]);
            
            if($check){
			    $_SESSION["username"] = $un;
				header('Location: index.php');
			}
            else
                echo "Incorrect";
		}
		catch(Exception $e){
			echo "Error: " . $e->getMessage();
		}
		$conn = null;
	}
?>