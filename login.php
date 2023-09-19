<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <h1>Log In</h1>
    <form action="login_process.php" method="POST">
        <label for="username">Email/Number:</label>
        <input type="text" id="emailnumber" name="emailnumber" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Log In">
    </form>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
</body>
</html>
