
<?php
	include "dbconnect.php";

	if (isset($_GET['msg'])) {
		$message = urldecode($_GET['msg']);
		echo "<p>$message</p>";
	}
	$sql="SELECT * FROM user";
	$result=$conn->query($sql);
	
?>


<html>
	<head>
		<style>
			table {
				border-collapse: collapse;
				width: 100%;
			}

			td, th {
			  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 8px;
			}
			
		</style>
	</head>
	
	<body>
	
		<h2 align="center">Data</h2>
		
		<table>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Skills</th>
				<th>Designation</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
				if($result->num_rows>0)
				{
					while($r =$result->fetch_assoc()){
						$id=$r['id'];
						echo "<tr>";
						echo "<td>".$r['name'] . "</td>";
						echo "<td>". $r['email']. "</td>";
						echo "<td>".$r['gender'] . "</td>";
						echo "<td>".$r['skills'] . "</td>";
						echo "<td>". $r['designation']. "</td>";
						echo "<td>"."<a href='update.php?editid=$id'>Edit</a>"."</td>";
						echo "<td>"."<a href='delete.php?delid=$id'>Delete</a>"."</td>";
				
					echo "</tr>";
					}
				}
				else echo "No data found";
				?>
		
		
		</table>
		<a href="Insert_form.php">Add New Record</a>
	</body>
</html>

	
