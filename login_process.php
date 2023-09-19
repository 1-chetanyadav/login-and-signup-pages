<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Connect to the MySQL database
    $conn = new mysqli("localhost", "root", "", "videodb");
    
    // Check for database connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Retrieve user data by username
    $check_username_query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($check_username_query);
    
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row["password"];
        
        // Verify the password
        if (password_verify($password, $stored_password)) {
            echo "Login successful. Welcome, " . $row["name"] . "!";
        } else {
            echo "Incorrect password. Please try again.";
        }
    } else {
        echo "Username not found. Please sign up.";
    }
    
    // Close the database connection
    $conn->close();
}
?>
