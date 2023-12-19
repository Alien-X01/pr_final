<?php
// Retrieve form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];

// Perform database connection (replace with your database credentials)
$servername = "18.224.65.226";
$username = "root";
$password = "r";
$dbname = "pr_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform database insertion
$sql = "INSERT INTO user_data (full_name, email) VALUES ('$fullName', '$email')";

if ($conn->query($sql) === TRUE) {
    // Redirect to another page upon successful submission
    header("Location: final.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
