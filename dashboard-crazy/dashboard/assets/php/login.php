<?php

	include "dbconfig.php";

	$mail = $_POST["mail"];
	$pw = $_POST["pw"];

	function encrypt_password($password) {
        $password_hash = hash('sha256', $password);
		return $password_hash;
		}
	
		$password_hash = encrypt_password($pw);


		$regusr = mysqli_query($conn,"SELECT * FROM `users` WHERE Email = '$mail'");
		$dbusr = mysqli_fetch_array($regusr);

	

		if($dbusr["Password"] == $password_hash){
			session_start();
			$_SESSION['vali'] = 1;
			$_SESSION['usrid'] = $dbusr["Id"];
			$_SESSION['usrvname'] = $dbusr["Firstname"];
			$_SESSION['usrnname'] = $dbusr["Lastname"];
			$_SESSION['imgsrc'] = $dbusr["imgsrc"];
			
			header("LOCATION: ../../dashboard.php");
			echo "ok";
					
	}
	else{ 
		
		echo "error";
	}

?>
