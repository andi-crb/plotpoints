<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "plotpoints";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);
    
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
        echo "Error!";
    } 
    // echo "Connected successfully (".$db->host_info.")";
    
    mysqli_select_db($db, "ajax");
    
    $sql = "SELECT * FROM points";
    $result = mysqli_query($db,$sql);

$db->close();
?>