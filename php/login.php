<?php
session_start();

if(isset($_GET["login"])) {
    $email = $_GET["email"];
    $pass = $_GET["pass"];

    $host = "localhost";
    $dbname = "urban-workers";
    $dbpass = "";
    $dbuname = "root";
    $conn = new mysqli($host, $dbuname, $dbpass, $dbname);

    $sql = "SELECT * FROM signupworkers WHERE email='$email' and pass='$pass'";
    $result = $conn->query($sql);
    echo '<script>alert("Login successful");</script>';


    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $storedHashedPassword = $row["pass"];
        echo '<script>alert("Login successful");</script>';


        if (password_verify($pass, $storedHashedPassword)) {
            $_SESSION["email"] = $email;
            header("Location: index.html"); // Redirect to user dashboard

            echo '<script>alert("Login successful");</script>';
            exit();
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "User not found.";
    }

    $conn->close();
}
?>
