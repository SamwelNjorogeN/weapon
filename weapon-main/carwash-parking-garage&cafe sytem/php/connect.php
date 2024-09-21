<?php
    $servername = "localhost";
    $username = "root";
    $password = "@S4n5kw8s";
    $database = "carwash";

    $conn = new mysqli($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
?>
