<?php
    require('config.php');


    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select name,email from user";
    $result = $conn->query($sql);
    echo $sql;
?>