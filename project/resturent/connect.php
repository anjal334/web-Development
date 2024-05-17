<?php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "website_data";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Your PHP code to interact with the database goes here
    
    // Close the connection
    $conn->close();
    ?>
    
?>
