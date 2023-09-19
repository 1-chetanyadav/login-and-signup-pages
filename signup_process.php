<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $name = $_POST["name"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password for security
    
    // Connect to the MySQL database
    $conn = new mysqli("localhost", "root", "", "videodb");
    
    // Check for database connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check if the username is already taken
    $check_username_query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($check_username_query);
    
    if ($result->num_rows > 0) {
        echo "Username already taken. Please choose another.";
    } else {
        // Insert user data into the database
        $insert_query = "INSERT INTO users (username, name, password) VALUES ('$username', '$name', '$password')";
        
        if ($conn->query($insert_query) === TRUE) {
            echo "Registration successful. <a href='login.php'>Log in</a> to your account.";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
    
    // Close the database connection
    $conn->close();
}
?>
