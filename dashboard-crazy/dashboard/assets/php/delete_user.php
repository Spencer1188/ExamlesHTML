<?php
			include "dbconfig.php";
			$id = $_GET["id"];

			$sql = "delete from users where Id = $id";

			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}

	header("LOCATION: ../../employee.php");

?>