<?php
    require('config.php');
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select name,email from user";
    $result = $conn->query($sql);
    
    //Print result
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["name"]. " email: " . $row["email"];
        }
    } else {
        echo "0 results";
    }
    
?>