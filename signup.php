<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="signup_process.php" method="POST">

    <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required><br><br>
    <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required><br><br>
        

        <label for="emailnumber">Email/Number:</label>
        <input type="text" id="emailnumber" name="emailnumber" required><br><br>
        
       
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="password">Confirm Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Sign Up">
    </form>
    <p>Already have an account? <a href="login.php">Log In</a></p>
</body>
</html>
