
<?php
include "dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $id=$_POST['id'];
	$name = validate_data($_POST['name']);
    $email = validate_data($_POST['email']);
    $password = validate_data($_POST['pwd']);
    $gender = $_POST['gender'];
	//$skills=$_POST['skills'];
    $skills = isset($_POST['skills']) ? implode(',', $_POST['skills']) : 'No skills selected';
    $designation = $_POST['designation'];	
}

	function validate_data($data){
			$data = htmlspecialchars($data);
			$data=trim($data);
			$data=stripslashes($data);
			return $data;
	}
	
	$sql=" UPDATE user SET name= '$name', email='$email', password = '$password', gender='$gender',
	skills= '$skills', designation='$designation' where id='$id' ";
	$result=$conn->query($sql);
	if($result)
	{
		header("location:index.php");
	}
	else
		echo "Update failed.";
?>
