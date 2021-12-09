<?php
    $servername = "localhost";
    $username = "my_avoc";
    $password = "";
    $databse = "my_avoc";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $databse);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>