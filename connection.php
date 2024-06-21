<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "intern_db";

    $conn = mysqli_connect($server, $user, $password, $dbname) or die("Connection failed".mysqli_connect_error());


?>