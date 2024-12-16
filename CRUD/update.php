<?php
	include "dbconnect.php";
	if(isset($_GET['editid'])){
		$id=$_GET['editid'];
		$sql="SELECT * FROM user where id='$id'";
		$result=$conn->query($sql);
		$user=$result->fetch_assoc();

	}

?>
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
                    <h2>Update Information</h2>
                    <form action="update_data.php" method="POST">

                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

                        <label>Name: </label> 
                        <input type="text" name="name" value="<?php echo $user['name']; ?>"><br><br>

                        <label>E-mail:</label> 
                        <input type="text" name="email" value="<?php echo $user['email']; ?>" > <br><br>

                        <label>Password</label> 
                        <input type="password" name="pwd" value=""><br><br>

                        <label>Gender:</label>
                        <input type="radio" name="gender" value="Male" <?php echo ($user['gender'] == 'Male') ? 'checked' : ''; ?>>
                        <label>Male</label>
                        <input type="radio" name="gender" value="Female" <?php echo ($user['gender'] == 'Female') ? 'checked' : ''; ?>>
                        <label>Female</label><br><br>

                        <label>Skills:</label>
                        <?php
							$skills = explode(',', $user['skills']);
							/*
							$skill_html=$skill_css=$skill_js=null;
							foreach($skills as $sk){
								if($sk=='HTML')
									$skill_html=$sk;
								elseif($sk=='CSS')
									$skill_css=$sk;
								elseif($sk=='JavaScript')
									$skill_css=$sk;
							}
							*/
                        ?>
					   <input type="checkbox" name="skills[]" value="HTML" <?php echo (in_array('HTML', $skills)) ? 'checked' : ''; ?>>
                        <label>HTML</label>
                        <input type="checkbox" name="skills[]" value="CSS" <?php echo (in_array('CSS', $skills)) ? 'checked' : ''; ?>>
                        <label>CSS</label>
                        <input type="checkbox" name="skills[]" value="JavaScript" <?php echo (in_array('JavaScript', $skills)) ? 'checked' : ''; ?>>
                        <label>JavaScript</label><br><br>

                        <label>Designation:</label>
                        <select name="designation" required>
                            <option value="Developer" <?php echo ($user['designation'] == 'Developer') ? 'selected' : ''; ?>>Developer</option>
                            <option value="Designer" <?php echo ($user['designation'] == 'Designer') ? 'selected' : ''; ?>>Designer</option>
                            <option value="Programmer" <?php echo ($user['designation'] == 'Programmer') ? 'selected' : ''; ?>>Programmer</option>
                        </select><br><br>

                        <input type="submit" value="Update">
                    </form>
                </div>
            </body>
        </html>