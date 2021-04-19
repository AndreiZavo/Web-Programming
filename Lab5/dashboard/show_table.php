<?php

function show_db_table() {

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "webdatabase";

    $conn = mysqli_connect($host, $user, $password, $db) or die('Could not connect');

    $sql = "SELECT * FROM news";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . substr($row['text'], 0, 6) . "</td>";
        echo "<td>" . $row['producer'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "</tr>";
    }
    
    mysqli_close($conn);
}


?>