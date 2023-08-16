<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $contact = $_POST["contact"];
    $pass = $_POST["pass"];
    $confirm = $_POST["confirm"];
    
    // Process and validate other form fields here
    
    // Handling the uploaded image
    // Handling the uploaded image

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "urban-workers";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO signupclient (full_name, email, address, city, contact, pass, confirm)
            VALUES ('$full_name', '$email', '$address', '$city', '$contact',  '$pass', '$confirm')";

    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>