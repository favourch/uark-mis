<?php
	session_start();
	error_reporting(E_ALL);
    if (!isset($_POST['loginUsername']) && !isset($_POST['loginPassword']))
        header("Location: index.php"); 	
	ini_set('display_errors', 1);
    include 'php/functions.php';	
	if(isset($_POST)){
		try {
			$conn=createPDO();
            $stmt = $conn->prepare("SELECT userID,password,name,gaRole,advisorRole,supervisorRole,committeeRole,adminRole FROM user WHERE username=:username");

            $stmt->execute(array(':username' => $_POST['loginUsername']));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

			$userpassword = $_POST['loginPassword'];
            $check = password_verify($userpassword,$row['password']);
            
            if($check){
			    $_SESSION["userID"] = $row['userID'];
				$_SESSION["name"]=$row['name'];
				if($row['gaRole'])
					$_SESSION["gaRole"]=$row['gaRole'];
				if($row['advisorRole'])
					$_SESSION["advisorRole"]=$row['advisorRole'];
				if($row['supervisorRole'])
					$_SESSION["supervisorRole"]=$row['supervisorRole'];
				if($row['committeeRole'])
					$_SESSION["committeeRole"]=$row['committeeRole'];
				if($row['adminRole'])
					$_SESSION["adminRole"]=$row['adminRole'];																										
				header('Location: index.php');
			}
            else{
				include 'header.php'; ?>
				<h1 class="text-center text-danger">
					<b> You have entered incorrect login credentials. Please try again. </b>
				</h1>
				<?php
			}
		}
		catch(Exception $e){
			echo "Error: " . $e->getMessage();
		}
		finally{
			$conn = null;
		}
	}
?>