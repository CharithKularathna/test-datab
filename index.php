<?php
    require('config.php');
    $conn = new mysqli("https://us-cdbr-iron-east-05.cleardb.net/", "bdde6f907f7b57", "70a5e9ec", "heroku_de2f18f953c712d");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select name,email from user";
    $result = $conn->query($sql);
    echo $sql;
    
?>