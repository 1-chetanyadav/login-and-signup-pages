<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailnumber = $_POST["emailnumber"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password for security
    
    // Connect to the MySQL database
    $conn = new mysqli("localhost", "root", "", "videodb");
    
    // Check for database connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check if the emailnumber is already taken
    $check_emailnumber_query = "SELECT * FROM users WHERE emailnumber = '$emailnumber'";
    $result = $conn->query($check_emailnumber_query);
    
    if ($result->num_rows > 0) {
        echo "emailnumber already taken. Please choose another.";
    } else {
        // Insert user data into the database
        $insert_query = "INSERT INTO users (fname,lname,emailnumber,  password) VALUES ('$fname','$lname','$emailnumber',  '$password')";
        
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
