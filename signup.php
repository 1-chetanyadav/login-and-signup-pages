<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="main">
    <div id="sign">
    <h1>Sign Up</h1>
    <form action="signup_process.php" method="POST">

    
        <input type="text" placeholder="First name" class="textarea" id="fname" name="fname" required><br><br>
    
        <input type="text" placeholder="Last name" class="textarea" id="lname" name="lname" required><br><br>
        

       
        <input type="text" class="textarea" placeholder="Mobile number or Email"  id="emailnumber" name="emailnumber" required><br><br>
        
       
      
        <input type="password" class="textarea" placeholder="New Password"  id="password" name="password" required><br><br>
        
        <input type="password" class="textarea" placeholder="Confirm Password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Sign Up">
    </form>
    <p>Already have an account? <a href="login.php">Log In</a></p>

    </div>
      
    
    </div>

    <script src="login.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
