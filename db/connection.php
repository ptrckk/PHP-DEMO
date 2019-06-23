<?php

    // Database credentials inladen
    include 'config.php';

    // Connect database, credentials van config.php
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Wanneer connection failed, print error
    if ($conn->connect_error) {
        die('Could not connect: ' . $conn->connect_error);
    }

?>