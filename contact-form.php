/<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Establish database connection
$servername = "192.168.1.101";
$username = "mysql"; // Your MariaDB username
$dbname = "tickets"; // Your MariaDB database name
$password = "yourpasshere";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Prepare and execute SQL statement to insert data into database
// Assuming $user_password is the password provided by the user
$sql = "INSERT INTO contact_form (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Your Message has been delivered to the Database.";
 	header("Location: index.html");
        exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
