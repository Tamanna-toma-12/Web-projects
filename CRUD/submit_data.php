
<?php
include "dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    
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
	
	$sql="INSERT INTO user(id, name, email,password, gender, skills, designation) 
	VALUES(Null, '$name', '$email', '$password', '$gender','$skills', '$designation')";
	$result=$conn->query($sql);
	if($result)
	{
		header("location:index.php");
	}
	else
		echo "Data inseration failed.";
?>


<html>
	<body>
	
		<h2>Data</h2>
		<table border="2">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Skills</th>
				<th>designation</th>
			</tr>
			<tr>
				<?php
					echo "<td>". $name. "</td>";
					echo "<td>". $email. "</td>";
					echo "<td>". $gender. "</td>";
					echo "<td>". $skills. "</td>";
					echo "<td>". $designation. "</td>";
				?>
			</tr>
		
		</table>
		<?php
			echo "<p>Name: " . $name. "</p>";
			echo "<p>Email: " . $email. "</p>";
			echo "<p>Password: " . $password. "</p>";
			echo "<p>Gender: " . $gender. "</p>";
			echo "<p>Skills: " . $skills. "</p>";
			echo "<p>Designation: " . $designation. "</p>";
		?>
	</body>
</html>

	
