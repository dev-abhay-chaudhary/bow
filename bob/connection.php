<?php
    //define server and database details here
    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "bob";

    //make connection to db
    $con = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
    //check connection status
    if (!$con) {
        die("Connection to db failed with error".mysqli_connect_error());
    }
?>