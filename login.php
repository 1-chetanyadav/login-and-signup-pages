<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> <div id="main">
        <div id="login">
            <h1>Login</h1>
    <form action="login_process.php" method="POST">
     
        <input type="text" class="textarea" placeholder="Email or phone number" id="emailnumber" name="emailnumber" required><br><br>
        
       
        <input type="password" class="textarea" placeholder="Password" id="password" name="password" required><br><br>
        <div id="btn">
         
            <input id="sub" type="submit"  value="Log In">
            <button>forgot password</button>
        </div>
    </form>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </div>
</body>
</html>
