<!DOCTYPE html>
<html>
<head>
    <title>Fetched Data</title>
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            width: calc(20% - 20px); /* Distribute cards in three columns */
            margin: 10px; /* Adjust spacing */
            display: flex;
            align-items: center;
        }

        .card img {
            max-width: 80px;
            border-radius: 50%;
            margin-right: 16px;
        }

        .card-info {
            flex: 1;
        }

        .card-info h2 {
            margin: 0;
            font-size: 16px;
            margin-bottom: 8px;
        }

        .card-info p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Fetched Data - <?php echo $_GET['service']; ?></h1>
    <div class="card-container">
        <?php
        if (isset($_GET['service'])) {
            $service = $_GET['service'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "urban-workers";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM signupworkers WHERE services = '$service'";
            $data = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($data);
            if ($count != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "
                    <div class='card'>
                        <img src='" . $result['picture'] . "' alt='Profile Picture'>
                        <div class='card-info'>
                            <h2>" . $result['full_name'] . "</h2>
                            <p>Service: " . $result['services'] . "</p>
                            <p>Address: " . $result['address'] . "</p>
                            <p>Contact: " . $result['contact'] . "</p>
                        </div>
                    </div>";
                }
            } else {
                echo "<p>No data available</p>";
            }

            $conn->close();
        } else {
            echo "<p>Service parameter missing.</p>";
        }
        ?>
    </div>
</body>
</html>
