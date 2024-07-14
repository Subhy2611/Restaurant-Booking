<?php
// Database configuration
$servername = "localhost";
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $quantity = $_POST['quantity'];
    $food = $_POST['food'];
    $address = $_POST['address'];

    // SQL query to insert data into ordernow table
    $sql = "INSERT INTO ordernow (name, email, quantity, food, address) VALUES ('$name', '$email', '$quantity', '$food', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
