<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database laundryy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$service = $_POST['service'];
$pickup_date = $_POST['pickup-date'];
$delivery_date = $_POST['delivery-date'];
$comment = $_POST['comment'];

$sql = "INSERT INTO requests (name, email, phone, address, service, pickup_date, delivery_date, comment)
VALUES ('$name', '$email', '$phone', '$address', '$service', '$pickup_date', '$delivery_date', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
