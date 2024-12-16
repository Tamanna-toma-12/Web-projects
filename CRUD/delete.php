<?php
	include "dbconnect.php";

	if(isset($_GET['delid'])) {
		$id = $_GET['delid'];

		$sql = "DELETE FROM user WHERE id='$id'";
		$result=$conn->query($sql);

	    if ($result) {
			$message = urlencode("Record deleted successfully");
		} 
		else {
			$message = urlencode("Error deleting record: " . $conn->error);
		}
		
   
        header("Location: index.php?msg=$message");  
		exit();
	}

$conn->close();
?>
