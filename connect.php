<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

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
    echo "Connected successfully (".$db->host_info.")";
    
    $sql = "INSERT INTO points (id,text,thread,event,x,y) VALUES(2,\"engagement\",\"diamond\",\"Thread Three\",0,50)";
    
    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>

<?php


