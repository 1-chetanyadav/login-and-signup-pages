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
            echo "Login successful. Welcome, " . $row["fname"] . " ";
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
