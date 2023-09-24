
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   

</head>
<body>
    


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailnumber = $_POST["emailnumber"];
    $password = $_POST["password"];
    
    // Connect to the MySQL database
    $conn = new mysqli("localhost", "root", "", "videodb");
    
    // Check for database connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Retrieve user data by emailnumber
    $check_emailnumber_query = "SELECT * FROM users WHERE emailnumber = '$emailnumber'";
    $result = $conn->query($check_emailnumber_query);
    
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row["password"];
        
        // Verify the password
        if (password_verify($password, $stored_password)) {
            echo " ";
            // Assuming login is successful
$_SESSION['login_success'] = true;

        } else {
            echo "Incorrect password. Please try again.";
        }
    } else {
        echo "Email/Number not found. Please sign up.";
    }
    
    // Close the database connection
    $conn->close();
}
?>

<script>
    // Check if the login success session variable is set
    <?php if (isset($_SESSION['login_success']) && $_SESSION['login_success'] === true): ?>
        // Display a success message
        var successMessage = document.createElement('div');
        successMessage.textContent = 'Login successful';
        successMessage.style.position = 'fixed';
        successMessage.style.top = '20px';
        successMessage.style.left = '50%';
        successMessage.style.transform = 'translateX(-50%)';
        successMessage.style.backgroundColor = 'green';
        successMessage.style.color = 'white';
        successMessage.style.padding = '10px';
        successMessage.style.borderRadius = '5px';
        successMessage.style.zIndex = '9999';
        document.body.appendChild(successMessage);

        // Redirect to index.php after 2 seconds
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 600);

        // Clear the session variable to prevent showing the message again on refresh
        <?php unset($_SESSION['login_success']); ?>
    <?php endif; ?>
</script>
</body>
</html>