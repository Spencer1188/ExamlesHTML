<?php
	include "dbconfig.php";

	$codeurl = $_GET["code"];
	$pw1 = $_POST["pw1"];
	$pw2 = $_POST["pw2"];

	$query = "SELECT * FROM `users` WHERE `pwsetcode`='$codeurl'";
	if ($result = $conn->query($query)) {
		$dbuser = $result->fetch_row();
	}else{
		echo "error no";
	}

	if($codeurl == $dbuser[5]){
		if($pw1 == $pw2){
				function encrypt_password($password) {
					$password_hash = hash('sha256', $password);
					return $password_hash;
				}
			
			$password_hash = encrypt_password($pw1);
			$sql = "update users set password='$password_hash',pwsetcode='' where pwsetcode='$codeurl'";

			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	}else{
		die("Error!");
	}

	header("LOCATION: ../../index.php");


?>