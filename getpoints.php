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
    
    $json = array();
        while($row = mysqli_fetch_array($result)) {
        array_push($json, array($row['id'], $row['text'], $row['event'], $row['thread'], $row['xposition'], $row['yposition']));
    }

    header('Content-Type: application/json');
    echo json_encode($json);
    
    // echo "<table>
    //     <tr>
    //     <th>ID</th>
    //     <th>Text</th>
    //     <th>Thread</th>
    //     <th>Event</th>
    //     <th>x</th>
    //     <th>y</th>
    //     </tr>";
    // while($row = mysqli_fetch_array($result)) {
    //     echo "<tr>";
    //     echo "<td>" . $row['id'] . "</td>";
    //     echo "<td>" . $row['text'] . "</td>";
    //     echo "<td>" . $row['thread'] . "</td>";
    //     echo "<td>" . $row['event'] . "</td>";
    //     echo "<td>" . $row['x'] . "</td>";
    //     echo "<td>" . $row['y'] . "</td>";
    //     echo "</tr>";
    // }
    // echo "</table>";    
    


$db->close();
?>