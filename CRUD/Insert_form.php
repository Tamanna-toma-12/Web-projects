
<html>
	<head>
		<style>
			div{
				background-color:silver;
				text-align:center;
				width:40%;
				margin:auto;
				padding:20px;
				border-radius:5px;
				}
		</style>
	</head>
	<body>
		<div>
			<h2> Provide the Following Information</h2>
			<form action="submit_data.php" method="POST">

				<label>Name: </label> 
				<input type="text" name="name"><br> <br>
				<label>E-mail:</label> 
				<input type="text" name="email" placeholder="Enter your email" required> *<br><br>
				<label>Password</label> 
				<input type="password" name="pwd"><br><br>
				
				<!--radio button-->
				<label>Gender:</label>
				<input type="radio" id="male" name="gender" value="Male" >
				<label>Male</label>
				<input type="radio" id="female" name="gender" value="Female" >
				<label>Female</label><br><br>

				<!--check box-->
				<label>Skills:</label>
				<input type="checkbox" id="html" name="skills[]" value="HTML">
				<label>HTML</label>
				<input type="checkbox" id="css" name="skills[]" value="CSS">
				<label >CSS</label>
				<input type="checkbox" id="js" name="skills[]" value="JavaScript">
				<label >JavaScript</label><br><br>
				
				<!--Select option-->
				<label >Designation:</label>
				<select  name="designation" required>
					<option value="Developer">Developer</option>
					<option value="Designer">Designer</option>
					<option value="Programmer">Programmer</option>
				</select><br><br>
				
				<input type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>


	


	

