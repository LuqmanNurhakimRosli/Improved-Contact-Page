<?php

    // Enter your host name, database username, password, and database name.
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "loginsystem";

    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("localhost","root","","loginsystem");

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>