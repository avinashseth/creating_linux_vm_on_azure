<?php
    $servername = "localhost";
    $username = "root";
    $password = "mysql_demo_indore";
    $db = "indore";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Query Data
    $sql = "SELECT * FROM places_you_must_visit";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
