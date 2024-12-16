<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .c1{
            background-color: gainsboro;
            max-width: fit-content;
            margin-top: 200px;
        }
    </style>
</head>
<body>
    <center>
        <div class="c1">
        <form action="login.php" method="POST">
            <label>Username</label>
            <input type="text" name="username">
            <br><br>
            <label>Password</label>
            <input type="password" name="password">
            <br><br>
            <button name="login">Login</button>
            
        </form>
    </div>
    </center>
    
</body>
</html>